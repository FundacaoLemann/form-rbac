<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assign;

class AssignController extends Controller
{
    public function index()
    {
        return view('../assign/index');
    }

    // public function show()
    // {
    //     return view('../assign/');
    // }

   
    public function show()
    {
        return view('../assign/assign');
    }


    // public function edit($id)
    // {
    //     $assign = Assign::findOrFail($id);

    //     return view('../assign/edit', compact('assign'));
    // }

    // public function delete($id)
    // {
    //     return view('../assign/delete');
    // }
}
