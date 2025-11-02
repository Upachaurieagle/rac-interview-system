class Board {
    private $id;
    private $subject;
    private $members;

    public function __construct($id, $subject) {
        $this->id = $id;
        $this->subject = $subject;
        $this->members = [];
    }

    public function getId() {
        return $this->id;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function addMember(Expert $expert) {
        $this->members[] = $expert;
    }

    public function getMembers() {
        return $this->members;
    }

    public function removeMember($expertId) {
        foreach ($this->members as $key => $member) {
            if ($member->getId() === $expertId) {
                unset($this->members[$key]);
                break;
            }
        }
    }
}