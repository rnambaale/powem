<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Posts_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	/*************************************
	*	Posts
	*********************************************/

	public function get_posts($data = array()){
		$this->db->select('p.ID, p.title, p.slug, p.time_stamp, p.featured_image, p.content, p.author, a.first_name, a.last_name , p.status, cat.name AS cat_name, cat.slug AS cat_slug', false);
		$this->db->where($data);
		$this->db->order_by('p.time_stamp','DESC');
		$this->db->from('posts as p');
		$this->db->join('admins as a', 'p.author = a.ID', 'inner');
		$this->db->join('categories as cat', 'p.category = cat.slug', 'inner');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_posts_paginate($data = array(), $limit = 8, $start = 0, $order = 'DESC'){
		$this->db->select('p.ID, p.title, p.slug, p.time_stamp, p.featured_image, p.content, p.author, a.first_name, a.last_name , p.status, cat.name AS cat_name, cat.slug AS cat_slug', false);
		$this->db->where($data);
		$this->db->limit($limit, $start);
	    $this->db->order_by("ID", $order);
		$this->db->from('posts as p');
		$this->db->join('admins as a', 'p.author = a.ID', 'inner');
		$this->db->join('categories as cat', 'p.category = cat.slug', 'inner');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_search_posts($search, $data =  array(), $limit, $start, $order = 'DESC'){
		$this->db->select('p.ID, p.title, p.slug, p.time_stamp, p.featured_image, p.content, p.author, a.first_name, a.last_name , p.status, p.category AS cat_slug, cat.name AS cat_name', false);
		//$this->db->limit($limit, $start);
		$this->db->order_by("p.ID", $order);
		$this->db->where(array('p.status'=>'Published'));
		
		$this->db->like('p.title', $search);
		$this->db->or_like('p.content', $search);
		$this->db->or_like('a.last_name', $search);
		$this->db->or_like('a.first_name', $search);
		$this->db->or_like('p.category', $search);
		$this->db->or_like('p.sub_category', $search);
		$this->db->or_like('p.regions', $search);

		$this->db->from('posts as p');
		$this->db->join('admins as a', 'p.author = a.id', 'inner');
		$this->db->join('categories as cat', 'p.category = cat.slug', 'inner');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function get_search_posts_all($search, $data =  array(), $limit, $start, $order = 'DESC'){

		$subqueries = array();


		$this->db->select('p.ID, p.title, p.slug, p.time_stamp, p.featured_image, p.author, p.status, p.category AS cat_slug, cat.name AS cat_name', false);
		//$this->db->limit($limit, $start);
		$this->db->order_by("p.ID", $order);
		$this->db->where(array('p.status'=>'Published'));
		
		$this->db->like('p.title', $search);
		$this->db->or_like('p.content', $search);
		$this->db->or_like('p.category', $search);
		$this->db->or_like('p.sub_category', $search);
		$this->db->or_like('p.regions', $search);

		$this->db->from('posts as p');
		$this->db->join('categories as cat', 'p.category = cat.slug', 'inner');
		$subqueries[] = '('.$this->db->get_compiled_select().')';


		$this->db->select('p.ID, p.title, p.link, p.pubDate, p.featured_image, site.name AS site_name, p.status, p.category AS cat_slug, cat.name AS cat_name', false);
		//$this->db->limit($limit, $start);
		$this->db->order_by("p.ID", 'DESC');
		$this->db->where(array('p.status'=>'Published'));
		
		$this->db->like('p.title', $search);
		$this->db->or_like('site.name', $search);
		$this->db->or_like('p.category', $search);
		$this->db->or_like('p.sub_category', $search);
		$this->db->or_like('p.regions', $search);

		$this->db->from('rss_feeds as p');
		$this->db->join('rss_sites as site', 'p.site_ID = site.ID', 'inner');
		$this->db->join('categories as cat', 'p.category = cat.slug', 'inner');
		$subqueries[] = '('.$this->db->get_compiled_select().')';

		$sql = implode(' UNION ', $subqueries);

		return $this->db->query($sql)->result_array();
	}




	public function get_region_posts($region, $data, $limit, $start, $order = 'DESC'){
		$this->db->select('p.ID, p.title, p.slug, p.time_stamp, p.featured_image, p.content, p.author, a.first_name, a.last_name , p.status, p.category AS cat_slug, cat.name AS cat_name', false);
		$this->db->limit($limit, $start);
		$this->db->order_by("p.ID", $order);
		$this->db->where($data);
		$this->db->like('p.regions', $region);
		$this->db->from('posts as p');
		$this->db->join('admins as a', 'p.author = a.id', 'inner');
		$this->db->join('categories as cat', 'p.category = cat.slug', 'inner');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_post($data){
		$query = $this->db->get_where('posts', $data);
		return $query->row_array();
	}

	public function get_admin($data){
		$query = $this->db->get_where('admins', $data);
		return $query->row_array();
	}

	public function edit_post_2($where, $data){
		$this->db->where($where);
		$this->db->update('posts', $data);
	}


	/*************************************
	*	Posts Categories
	*********************************************/
	public function get_post_categories(){
		$query = $this->db->get_where('categories');
		return $query->result_array();
	}

	public function get_post_categories_sub($data){
		$this->db->order_by('name','ASC');
		$query = $this->db->get_where('categories_sub', $data);
		return $query->result_array();
	}

	public function get_post_category_sub($data){
		$query = $this->db->get_where('categories_sub', $data);
		return $query->row_array();
	}

	public function get_post_category($data){
		$query = $this->db->get_where('categories', $data);
		return $query->row_array();
	}

	public function edit_post_cat_2($where, $data){
		$this->db->where($where);
		$this->db->update('categories', $data);
	}

	public function get_regions(){
		$query = $this->db->get_where('regions');
		return $query->result_array();
	}

	public function get_region($data){
		$query = $this->db->get_where('regions', $data);
		return $query->row_array();
	}

	public function get_sub_regions($data){
		$query = $this->db->get_where('regions_sub', $data);
		return $query->result_array();
	}

	public function get_sub_region($data){
		$query = $this->db->get_where('regions_sub', $data);
		return $query->row_array();
	}
}