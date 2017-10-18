<?php
	class Template{
		protected $template;			//Path to template
		protected $variables = array();	//Variables passed to the template
		
		//Constructor
		public function __construct($template){
			$this->template = $template;
		}
		
		public function __get($key){
			return $this->variables[$key];
		}
		
		public function __set($key,$value){
			$this->variables[$key] = $value;
		}
		
		public function __toString(){
			extract($this->variables);
			chdir(dirname($this->template));
			ob_start();
			include basename($this->template);
			return ob_get_clean();
		}
	}