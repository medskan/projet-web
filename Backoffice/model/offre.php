<?php
	class offre{
        private $name =null;
        private $price=null;
        private $photo=null;
   		private $categ=null;
		
		public function __construct($name,$price, $photo, $categ)
		{
            $this->name=$name;
            $this->price=$price;
		$this->photo=$photo;
			$this->categ=$categ;
		}
           
		public function getcateg(){
			return $this->categ;
        }
        
		public function getname(){
			return $this->name;
		}
		public function getprice(){
			return $this->price;
		}
        public function getphoto(){
			return $this->photo;
		}
       

        public function setcateg($categ){
			$this->categ=$categ;
		}
		public function setname($name){
			$this->name=$name;
		}
		public function setprice($price){
			$this->price=$price;
        }
        public function setphoto($photo){
			$this->photo=$photo;
        }
        
       
}

?>