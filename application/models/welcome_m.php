<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_m extends CI_Model {

    public function get_specialties(){
        	$this->db->select("*");
        	$this->db->from("abbr");
        	$result = $this->db->get();
        	$specialties = $result->result_array();
        	return $specialties;

}
  public function get_tags(){
      $feed_url = base_url().'assets/feed.json';//$this->config->item('feed_url');
      $feed = json_decode(file_get_contents($feed_url, true));

      $items = $feed->tags;
      $items = (array)$items;

      arsort($items);

      return $items;
  }

  public function get_all($section){
	$feed_url = base_url().'assets/feed.json';//$this->config->item('feed_url');
	$news = array();	
    $feed = json_decode(file_get_contents($feed_url, true));
    $items = $feed->nodes;

    foreach($items as $item){
        $item = $item->node;

        $newitem = $this->format_item($item);

        $tags = $newitem['tags'];


        if(($section=="All")){
            $news[] = $newitem;

        }else{

            if(in_array($section, $tags)){
                $news[] = $newitem;
            }

        }

    }

    return $news;
 }	
  public function format_item($item){
  	        $newitem = array();

            $newitem['id'] = $item->nid;

            $newitem['relevance'] = 0;

			$newitem['link'] = "http://the-star.co.ke" . $item->path;//str_replace('/news/', 'http://the-star.co.ke/news/', $item->path);
			
			$newitem['title'] = $item->title;
			
			$newitem['tags'] = $item->sorted_tags;

			$newitem['description'] = $this->first_paragraph($item->body);
			
			$newitem['timestamp'] = $item->created;
 
			$newitem['author'] =$item->field_author;

            $newitem['theme'] = $item->theme;

			if(isset($item->field_image)){

                    $field_image = $item->field_image;

                    //check if is array
                    if(is_array($field_image)){
                        $field_image = $field_image[0];
                    }

                    if(property_exists($field_image, "src")){

                        $newitem['thumb'] = $field_image->src;

                    }else{

                        $newitem['thumb'] = null;
                    }


			}else{

				$newitem['thumb'] = null;

			}
			return $newitem;
  }
  public function get_featured(){
	$feed_url = base_url().'assets/feed.json';//$this->config->item('feed_url');
	$news = array();	
	$feed = json_decode(file_get_contents($feed_url, true));
	$items = $feed->nodes;

        $i = 0;

        foreach($items as $item){
				$item = $item->node;
					$newitem = $this->format_item($item);
						if($newitem['thumb']!=null){

							$news[] = $newitem;

                            if($i ==0 ){
                                $news['so_far'] = $this->get_story_so_far($newitem['theme']);
                            }
                            $i++;
						}
		}
	
	return $news;
 }	

	public function get_thumbnail($thumb){
		$thumb = explode(',', $thumb);
		return $thumb[0];
	}
	public function get_tags_old($s){
		$s = strip_tags(urldecode($s));
		$s = str_replace('http://www.the-star.co.ke/', '', $s);
		$s = str_replace('http://the-star.co.ke/', '', $s);
		$tags = explode(', ', $s);
		if(in_array('Star Health', $tags)){
			$tags = array_flip($tags);
			unset($tags['Star Health']);
			$tags = array_flip($tags);		
		}
		return $tags;
}
	public function first_paragraph($string){
		
		//$string = explode("</p>", $string);
		//if(sizeof($string)>0){
		//	$newstring = $string[0]."</p>";	
		//}else{
			//return only first two sentences
			//now split the first bit using fullstops
			//$string = explode(". ", str_replace('&nbsp;', ' ', $string[0]));
			$string = explode(".", $string);
			//then combine parts
			if(sizeof($string)>1){
				$newstring = $string[0].'. '.$string[1].'.';
			}else{
				$newstring = $string[0];
			}
		//}
		//TODO: find way to leave some tags like <i>, <b>, <a>...
		return strip_tags($newstring);
}
   public function get_archive($cat){
 	
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("category", $cat);
	
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
    public function show_article($id){
 	
	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	$this->db->where("id", $id);
	
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }
   public function get_facilities_counties(){
   	$this->db->select("*");
   	$this->db->from("counties");
	
	$result = $this->db->get();
	return $result->result_array();
   }
   public function get_towns(){
   	$this->db->select("*");
	$this->db->from("nhif");
	$this->db->where("Town !=", "");
	$this->db->group_by("Town");
	$result = $this->db->get();
	return $result->result_array();
   }

   public function get_story_so_far($theme){
       $stories = $this->get_all('All');

       $articles = array();

       print "<pre>";
       print_r($theme);
       print "</pre>";

       $total_tags = count((array)$theme);

       foreach($theme as $key=>$value){

           foreach($stories as $item){

               //check if story has theme
               if(property_exists($item['theme'], $key)){

                   //check if article already added
                   if(!array_key_exists($item['id'], $articles)){
                       //if not added else, add article, set closeness
                       $articles[$item['id']] = $item;
                   }

                   //edit closeness(average or sum?)
                   $articles[$item['id']]['relevance'] = $articles[$item['id']]['relevance'] + ($total_tags * $item['theme']->$key);

               }

           }

           $total_tags--;

       }
       //sort articles by closeness

       print "<pre>";
       print_r($articles);
       print "</pre>";

       return $articles;
   }

   public function get_helplines(){
	/*$this->db->select("h_story.*, helplines.*");
	$this->db->from("h_story");
	$this->db->join("helplines", "h_story.helpline_id=helplines.h_id");
	$this->db->where("story_id", $story);
	*/
	$result = $this->db->get('helplines');
	return $result->result_array();
   }
   public function get_supportgroups(){
	/*$this->db->select("sg_story.*, supportgroups.*");
	$this->db->from("sg_story");
	$this->db->join("supportgroups", "sg_story.sg_id=supportgroups.sg_id");
	$this->db->where("story_id", $story);
	*/
	$result = $this->db->get('supportgroups');
	return $result->result_array();
   }
   public function get_socialmedias(){
	/*$this->db->select("sm_story.*, socialmedia.*");
	$this->db->from("sm_story");
	$this->db->join("socialmedia", "sm_story.sm_id=socialmedia.sm_id");
	$this->db->where("story_id", $story);
	*/
	$result = $this->db->get('socialmedia');
	return $result->result_array();
   } 

}
