<?PHP
	class Utilisateur{
		private  $id = null;
		private  $nom_hotel = null;
		private  $adresse= null;
		private  $nbr_etoile = null;
		private  $prix = null;
		


		function __construct(string $nom_hotel, string $adresse, int $nbr_etoile, int $prix){
			
			$this->nom=$nom_hotel;
			$this->prenom=$adresse;
			$this->email=$email;
			$this->login=$login;
			$this->password=$password;

		}

		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		function getLogin(): string{
			return $this->login;
		}
		function getEmail(): sring{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}
        function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom;
		}
		function setLogin(string $login): void{
			$this->login=$login;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}

	}
?>