<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function submit(TodoRequest $add)
    {
        $todo = new Todo();
        $todo->name = $add->input('name');
        $todo->notes = $add->input('notes');
        $todo->status = $add->input('status');

        $todo->save();

        return redirect()->route('todo')->with('success', 'Цель была добавлена');
    }
    public function show()
    {
        return view('todo.todo', ['data' => Todo::all()]);
    }
    public function info($id)
    {
        $red = Todo::find($id);
        DB::table('todos')
            ->where('id', $id)
            ->update(['status' => 2]);

        $red->save();

        return redirect()->route('todo', $id)->with('success', 'Сообщение успешно перенесенно');
    }
    public function success($id)
    {
        $red = Todo::find($id);
        DB::table('todos')
            ->where('id', $id)
            ->update(['status' => 3]);

        $red->save();

        return redirect()->route('todo', $id)->with('success', 'Сообщение успешно перенесенно');
    }
};
