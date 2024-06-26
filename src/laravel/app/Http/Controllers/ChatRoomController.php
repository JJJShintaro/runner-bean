<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MyValidationRequest;

class ChatRoomController extends Controller
{
     /**
     * 作成.
     *
     * @param Request $request
     * @return void
     */
    public function create(MyValidationRequest $request) {
        // var_dump($request);
        // $todo = Todo::create($request->all());


        // $validated = $request->validate([
        // 'name' => 'required|max:5'
        // // 'email' => 'required|email|unique:users|max:255'
        // // 'email' => 'email'
        // ]);

        // redirect('/posts');
        return response()->json($request );
        // return response()->json("OK");
        // return [
        //     'message' => 'success',
        //     'data' => [
        //         'id' => 1, 
        //         'name' => 'Andy'
        //     ]
        // ];

    }

    public function fetch(Request $request) {
        // $todo = Todo::find($request->id);
        // return response()->json($todo);
        return "resutl";

    }

    public function view() {
        return view('view');

    }
    public function store( MyValidationRequest $request ) {
        

    }
}
