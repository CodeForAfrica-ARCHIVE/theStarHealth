<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_m extends CI_Model {

    public function get_specialties(){
        	$this->db->select("*");
        	$this->db->from("abbr");
        	$result = $this->db->get();
        	$specialties = $result->result_array();
        	return $specialties;

}

  public function get_all($section=null){
	$feed_url = base_url().'assets/feed.json';//$this->config->item('feed_url');
	$news = array();	
		$feed = json_decode(file_get_contents($feed_url, true));
		$items = $feed->nodes;

        //skip 6 major stories
        $majorTotal = 0;

		foreach($items as $item){
			$item = $item->node;
			
			$newitem = $this->format_item($item);
			$tags = explode(',', $newitem['tags']);

            if(($newitem['thumb']!=null)&&$majorTotal<6){
                //skip
            }else{
                if(($section==null)||($section==0)){
                    $news[] = $newitem;

                }else{

                    //all sections
                    $sections = array("Latest", "Features", "Opinion", "News");
                    //selected section in array
                    $sel_section = $sections[$section];
                    //tags in article
                    if(in_array($sel_section, $tags)){
                        $news[] = $newitem;
                    }
                }
            }

		}
	
	return $news;
 }	
  public function format_item($item){
  	$newitem = array();

			$newitem['link'] = str_replace('/article/', 'http://the-star.co.ke/article/', $item->path);
			
			$newitem['title'] = $item->title;
			
			$newitem['tags'] = $item->Tag;
			$newitem['description'] = $this->first_paragraph($item->body);
			
			$newitem['timestamp'] = $item->created;
 
			$newitem['author'] =$item->field_author;
			
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

		foreach($items as $item){
		
				$item = $item->node;
					$newitem = $this->format_item($item);
						if($newitem['thumb']!=null){
							$news[] = $newitem;
						}

		}
	
	return $news;
 }	

	public function get_thumbnail($thumb){
		$thumb = explode(',', $thumb);
		return $thumb[0];
	}
	public function get_tags($s){
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
   public function get_story_sofar($parent){
   	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp");
	$this->db->from("news");

	$this->db->where("parent", $parent);
	
	
	$result = $this->db->get();
	return $result->result_array();

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
