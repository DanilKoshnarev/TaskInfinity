namespace App\Infrastructure\Persistence\Eloquent;

use App\Domain\Entities\Task;
use App\Domain\Repositories\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{
    public function save(Task $task)
    {
        // Implementation using Eloquent ORM
    }

    public function findById($id)
    {
        // Implementation using Eloquent ORM
    }

    public function findAll()
    {
        // Implementation using Eloquent ORM
    }

    public function delete($id)
    {
        // Implementation using Eloquent ORM
    }
}
