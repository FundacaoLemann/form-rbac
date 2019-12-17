<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reviewer;

class ReviewerController extends Controller
{
    
    public function index()
    {
        return view('../reviewers/index');
    }

   
    public function create()
    {
        return view('../reviewers/create');
    }


    public function edit($id)
    {
        $reviewer = Reviewer::findOrFail($id);

        return view('../reviewers/edit', compact('reviewer'));
    }

    public function delete($id)
    {
        return view('../reviewers/delete');
    }
}
