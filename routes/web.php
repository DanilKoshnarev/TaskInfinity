use App\Http\Controllers\TaskController;

Route::post('/tasks', [TaskController::class, 'createTask']);
Route::get('/tasks', [TaskController::class, 'getAllTasks']);
Route::delete('/tasks/{id}', [TaskController::class, 'deleteTask']);
