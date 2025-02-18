namespace App\Domain\Entities;

class Task
{
    private $id;
    private $name;
    private $description;
    private $status;
    private $projectId;

    public function __construct($id, $name, $description, $status, $projectId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
        $this->projectId = $projectId;
    }

    // Getters and setters 
}
