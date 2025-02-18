namespace App\Domain\UseCases;

use App\Domain\Entities\Task;
use App\Domain\Repositories\TaskRepositoryInterface;

class ManageTasks
{
    private $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function createTask($id, $name, $description, $status, $projectId)
    {
        $task = new Task($id, $name, $description, $status, $projectId);
        $this->taskRepository.save($task);
    }

    public function viewTask($id)
    {
        return $this->taskRepository.findById($id);
    }

    public function viewAllTasks()
    {
        return $this->taskRepository.findAll();
    }

    public function removeTask($id)
    {
        $this->taskRepository.delete($id);
    }
}
