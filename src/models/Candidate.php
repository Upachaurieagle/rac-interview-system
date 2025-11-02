class Candidate {
    private $id;
    private $name;
    private $areaOfExpertise;

    public function __construct($id, $name, $areaOfExpertise) {
        $this->id = $id;
        $this->name = $name;
        $this->areaOfExpertise = $areaOfExpertise;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAreaOfExpertise() {
        return $this->areaOfExpertise;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAreaOfExpertise($areaOfExpertise) {
        $this->areaOfExpertise = $areaOfExpertise;
    }
}