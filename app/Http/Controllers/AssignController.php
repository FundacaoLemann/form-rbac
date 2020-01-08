<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assign;
use Illuminate\Support\Facades\DB;

class AssignController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')->where([
            ['valido', '=', 1],
            // [], preencher condicionando ao filtro
        ])->get();
        return view('../assign/index', compact('projects'), compact('reviewers'));
    }

    // public function show()
    // {
    //     return view('../assign/');
    // }

   
    public function show()
    {
        $projects = DB::table('projects')->where([
            ['valido', '=', 1],
            // [], preencher condicionando ao filtro
        ])->get();
        

        // $reviewers = DB::table('reviewers')->where([
        //     // ['status', '=', ?],
        // ])->get();

        $reviewers = DB::table('reviewers')->get();

        return view('../assign/assign', compact('projects'), compact('reviewers'));
        

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
