namespace App\Http\Controllers;

use App\Domain\UseCases\ManageTasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $manageTasks;

    public function __construct(ManageTasks $manageTasks)
    {
        $this->manageTasks = $manageTasks;
    }

    public function createTask(Request $request)
    {
        $this->manageTasks->createTask(
            $request->input('id'),
            $request->input('name'),
            $request->input('description'),
            $request->input('status'),
            $request->input('projectId')
        );

        return response()->json(['message' => 'Task created successfully']);
    }

    public function getAllTasks()
    {
        return response()->json($this->manageTasks->viewAllTasks());
    }

    public function deleteTask($id)
    {
        $this->manageTasks->removeTask($id);

        return response()->json(['message' => 'Task deleted successfully']);
    }
}
