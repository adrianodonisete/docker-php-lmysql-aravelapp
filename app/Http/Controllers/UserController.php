<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    public function show()
    {
        return view('user.show', [
            'msg' => $this->request->input('teste')
        ]);
    }
}
