namespace App\Domain\Repositories;

use App\Domain\Entities\Task;

interface TaskRepositoryInterface
{
    public function save(Task $task);
    public function findById($id);
    public function findAll();
    public function delete($id);
}
