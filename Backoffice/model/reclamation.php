<?PHP
class reclamation
{

    private ?string $name = null;
    private ?string $email = null;
    private ?int $phone = null;
    private ?string $reclamation = null;

    /**
     * service constructor.
     * @param string|null $name
     * @param string|null $email
     * @param int|null $phone
     * @param string|null $reclamation
     */
    public function __construct($name, $email, $phone, $reclamation)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->reclamation = $reclamation;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return int|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int|null $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getReclamation()
    {
        return $this->reclamation;
    }

    /**
     * @param string|null $reclamation
     */
    public function setReclamation($reclamation)
    {
        $this->reclamation = $reclamation;
    }



}