<?php
	
	class Adopt{
		private $db;
		
		public function __construct(){
			$this->db =new D;
		}
		
		public function getAdoptionPosts(){
			$this->db->query("SELECT * FROM adoption");
			$results = $this->db->resultSet();		
			return $results;
		}
		
	}