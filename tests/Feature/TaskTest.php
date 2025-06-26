use App\Models\User;
use App\Models\Task;

test('authenticated user can delete task', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $task = $user->tasks()->create([
        'title' => 'Test Task',
        'description' => 'Test Description',
    ]);

    $response = $this->delete(route('task.destroy', ['id' => $task->id]));

    $response->assertRedirect(route('task'));
    $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
});


