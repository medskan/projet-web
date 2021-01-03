<?PHP
class activ
{
    public $name;
    public $datecreation;
	public $photo ;
    public $description;

    
 	

    function getname()
    {
        return $this->name;
    }
  	function getphoto()
    {
        return $this->photo;
    }
    function getdatecreation()
    {
        return $this->datecreation;
    }
    function getdescription()
    {
        return $this->description;
    }
   
  
    // setter 
  

    function setname($name)
    {
        return $this->name= $name;
    }
    function setdatecreation($datecreation)
    {
        return $this->datecreation =$datecreation;
    }
    function setdescription($description)
    {
        return $this->description= $description;
    }
	function setphoto($photo)
    {
        return $this->photo= $photo;
    }
    function __construct($name,$description,$photo,$datecreation)
    {   
        $this->name = $name;
        $this->description = $description;
		$this->photo = $photo;
		$this->datecreation = $datecreation;
	 
        
    }
    // getter 
   
 
}
  ?>
