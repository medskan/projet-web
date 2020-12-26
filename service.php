<?PHP
class service
{
    private ?string $login = null;
    private ?string $email = null;
    private ?string $reclamation = null;
    private ?string $evaluation = null;
    private ?string $rapport = null;
    private ?int $note = null;
    private ?string $recommandation = null;

    /**
     * Utilisateur constructor.
     * @param string|null $login
     * @param string|null $email
     * @param string|null $reclamation
     * @param string|null $evaluation
     * @param string|null $rapport
     * @param int|null $note
     * @param string|null $recommandation
     */
    public function __construct($login, $email, $reclamation, $evaluation, $rapport, $note, $recommandation)
    {
        $this->login = $login;
        $this->email = $email;
        $this->reclamation = $reclamation;
        $this->evaluation = $evaluation;
        $this->rapport = $rapport;
        $this->note = $note;
        $this->recommandation = $recommandation;
    }

    /**
     * @return string|null
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string|null $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
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

    /**
     * @return string|null
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * @param string|null $evaluation
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;
    }

    /**
     * @return string|null
     */
    public function getRapport()
    {
        return $this->rapport;
    }

    /**
     * @param string|null $rapport
     */
    public function setRapport($rapport)
    {
        $this->rapport = $rapport;
    }

    /**
     * @return int|null
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param int|null $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return string|null
     */
    public function getRecommandation()
    {
        return $this->recommandation;
    }

    /**
     * @param string|null $recommandation
     */
    public function setRecommandation($recommandation)
    {
        $this->recommandation = $recommandation;
    }



}