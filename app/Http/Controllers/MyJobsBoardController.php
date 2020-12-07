<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyJobsBoard;

class MyJobsBoardController extends Controller
{
    public function index()
    {
        return MyJobsBoard::all();
    }

    public function find($id)
    {
        if ($id->fails()) {
            return response(['message' => 'Somthing went wrong', 'status' => false]);
        }
        $job = MyJobsBoard::findOrFail($id);
        return $job;
    }

    public function create(Request $request)
    {
        if ($request->fails()) {
            return response(['message' => 'Somthing went wrong', 'status' => false]);
        }

        $job = new MyJobsBoard;
        $input = $request->all();
        $job->title  = $input['title'];
        $job->save();
        return response(['data' => $job, 'message' => 'Successfully Created!', 'status' => true]);

    }

    public function update(Request $request, $id)
    {
       
        $job = MyJobsBoard::find($request->$id);
        if ($job == null) {
            return response(['message' => 'Something went wrong', 'status' => false]);
        }
        
 
    }

    public function delete($id)
    {
        {
        $job = MyJobsBoard::find($id);
        }
        
        if ($job == null) {
            return response(['message' => 'Something went wrong', 'status' => false]);
        }
        
        $job->delete();
        return response(['message' => 'job was deleted', 'status' => false]);;
    }
}

