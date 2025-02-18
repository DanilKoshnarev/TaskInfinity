namespace App\Domain\Services;

use App\Domain\Repositories\TaskRepositoryInterface;

class TaskService
{
    private $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function addTask($task)
    {
        $this->taskRepository.save($task);
    }

    public function getTask($id)
    {
        return $this->taskRepository.findById($id);
    }

    public function getAllTasks()
    {
        return $this->taskRepository.findAll();
    }

    public function deleteTask($id)
    {
        $this->taskRepository.delete($id);
    }
}
