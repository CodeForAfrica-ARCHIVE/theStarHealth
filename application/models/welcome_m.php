<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome_m extends CI_Model {
 
 public function get_featured($cat, $featured){
 	$this->db->select("*, UNIX_TIMESTAMP() - timestamp AS TimeSpent, timestamp, categories.*");
	$this->db->from("news");	
	$this->db->join("categories", "categories.cat_id=news.category");
	
	$this->db->where("news.featured", $featured);
	$this->db->where("news.section", $cat);
	
	
	$result = $this->db->get();
	$news = $result->result_array();
	return $news;
 }

  public function get_all($section=null, $featured){
	$feed_url = base_url().'assets/feed.json';//$this->config->item('feed_url');
	
	$news = array();
	
		$feed = json_decode(file_get_contents($feed_url, true));
		
		$items = $feed->nodes;
		
		foreach($items as $item){
			$item = $item->node;
			$newitem = array();

			$newitem['link'] = str_replace('/news/', 'http://the-star.co.ke/news', $item->Path);
			
			$newitem['title'] = $item->title;
			
			$newitem['tags'] = $item->Tags;
			$newitem['description'] = $this->first_paragraph($item->Body);
			
			$newitem['timestamp'] = $item->Date;
 
			$newitem['author'] =$item->Author;
			
			if(isset($item->images)){
				if(trim($item->images)!=''){
					$newitem['thumb'] = $this->get_thumbnail($item->images); 
				}else{
					$newitem['thumb'] = null;
				}
			}else{
				$newitem['thumb'] = null;
			}
			
			if(($section==null)||($section==0)){
				$news[] = $newitem;
				
			}else{
				$tags = explode(',', $newitem['tags']);	
				//all sections	
				$sections = array("Latest", "Features", "Opinion", "News");
				//selected section in array
				$sel_section = $sections[$section];
				//tags in article
				if(in_array('Major', $tags)){
					//skip major stories
					if($featured==true){
					$news[] = $newitem;
					}
				}elseif(in_array($sel_section, $tags)){
					$news[] = $newitem;
				}
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
   public function get_helplines($story){
	/*$this->db->select("h_story.*, helplines.*");
	$this->db->from("h_story");
	$this->db->join("helplines", "h_story.helpline_id=helplines.h_id");
	$this->db->where("story_id", $story);
	*/
	$result = $this->db->get('helplines');
	return $result->result_array();
   }
   public function get_supportgroups($story){
	/*$this->db->select("sg_story.*, supportgroups.*");
	$this->db->from("sg_story");
	$this->db->join("supportgroups", "sg_story.sg_id=supportgroups.sg_id");
	$this->db->where("story_id", $story);
	*/
	$result = $this->db->get('supportgroups');
	return $result->result_array();
   }
   public function get_socialmedias($story){
	/*$this->db->select("sm_story.*, socialmedia.*");
	$this->db->from("sm_story");
	$this->db->join("socialmedia", "sm_story.sm_id=socialmedia.sm_id");
	$this->db->where("story_id", $story);
	*/
	$result = $this->db->get('socialmedia');
	return $result->result_array();
   } 

}
