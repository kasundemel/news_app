<?php
/**
 * Created by IntelliJ IDEA.
 * User: kasun
 * Date: 2/13/17
 * Time: 11:33 PM
 */
class News_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function get_news($slug=FALSE){
		
		if($slug===FALSE){
			$query=$this->db->get('news');
			return $query->result_array();
		}

		$query=$this->db->get_where('news',array('slug' => $slug));
		return $query->row_array();
	}

	public function get_news_by_id($id=0){
		if($id===0){
			$query=$this->db->get('news');
			return $query->result_array();
		}

		$query=$this->db->get_where('news',array('id'=>$id));
		return $query->row_array();
	}

	public function set_news($id=0){
		
	}
}



