<?PHP
class categorie
{
    public $nom;
    public $datecreation;
    public $description;

    
 	

    function getnom()
    {
        return $this->nom;
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
  

    function setnom($nom)
    {
        return $this->nom= $nom;
    }
    function setdatecreation($datecreation)
    {
        return $this->datecreation =$datecreation;
    }
    function setdescription($description)
    {
        return $this->description= $description;
    }
    function __construct($nom,$description,$datecreation)
    {   
        $this->nom = $nom;
        $this->description = $description;
		$this->datecreation = $datecreation;
	 
        
    }
    // getter 
   
 
}
  ?>
