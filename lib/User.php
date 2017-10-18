<?php

	class User{
		private $db;
		
		public function __construct(){
			$this->db = new D;
		}
		
		public function login($user) {
			$this->db->query("SELECT * FROM users WHERE email = :email AND password = md5(:password)");
			
			$this->db->bind(':email', $user['email']);
			$this->db->bind(':password', $user['password']);
			
			$result = $this->db->exec();
			if($result>0){
				return true;
			} else {
				return false;
			}
		}
		
		public function register($user){			
			$this->db->query("INSERT INTO users (email, password, first_name, last_name, gender, username, profile_img) VALUES (:email, md5(:password), :firstname, :lastname, :gender, :username, :img)");
			
			$this->db->bind(':email', $user['Email']);
			$this->db->bind(':password', $user['Password']);
			$this->db->bind(':username', $user['Username']);
			$this->db->bind(':firstname', $user['First Name']);
			$this->db->bind(':lastname', $user['Last Name']);
			$this->db->bind(':gender', $user['Gender']);
			$this->db->bind(':img', $user['Profile_img']);
			
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
		
		public function getUserDetails($user){
			$this->db->query("SELECT * FROM users WHERE email = :email AND password = md5(:password)");
			
			$this->db->bind(':email', $user['email']);
			$this->db->bind(':password', $user['password']);
			
			$result = $this->db->single();
			return $result;
		}
		
	}