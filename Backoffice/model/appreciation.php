<?PHP
class appreciation
{

    private ?string $evaluation = null;
    private ?string $ratio = null;
    private ?int $rate = null;
    private ?string $recommendation = null;

    /**
     * appreciation constructor.
     * @param string|null $evaluation
     * @param string|null $ratio
     * @param int|null $rate
     * @param string|null $recommendation
     */
    public function __construct(?string $evaluation, ?string $ratio, ?int $rate, ?string $recommendation)
    {
        $this->evaluation = $evaluation;
        $this->ratio = $ratio;
        $this->rate = $rate;
        $this->recommendation = $recommendation;
    }

    /**
     * @return string|null
     */
    public function getEvaluation(): ?string
    {
        return $this->evaluation;
    }

    /**
     * @param string|null $evaluation
     */
    public function setEvaluation(?string $evaluation): void
    {
        $this->evaluation = $evaluation;
    }

    /**
     * @return string|null
     */
    public function getRatio(): ?string
    {
        return $this->ratio;
    }

    /**
     * @param string|null $ratio
     */
    public function setRatio(?string $ratio): void
    {
        $this->ratio = $ratio;
    }

    /**
     * @return int|null
     */
    public function getRate(): ?int
    {
        return $this->rate;
    }

    /**
     * @param int|null $rate
     */
    public function setRate(?int $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return string|null
     */
    public function getRecommendation(): ?string
    {
        return $this->recommendation;
    }

    /**
     * @param string|null $recommendation
     */
    public function setRecommendation(?string $recommendation): void
    {
        $this->recommendation = $recommendation;
    }


}