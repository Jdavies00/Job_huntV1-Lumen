<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommJobsBoard;

class CommJobsBoardController extends Controller
{
    public function index()
    {
        return CommJobsBoard::all();
    }

    public function find($id)
    {
        if ($id->fails()) {
            return response(['message' => 'Somthing went wrong', 'status' => false]);
        }
        $job = CommJobsBoard::findOrFail($id);
        return $job;
    }

    public function create(Request $request)
    {
        // if ($request->fails()) {
        //     return response(['message' => 'Somthing went wrong', 'status' => false]);
        // }

        $job = new CommJobsBoard;
        if ($request->fails()) {
            return response(['message' => 'Somthing went wrong', 'status' => false]);
        }

        $job = new CommJobsBoard;
        $input = $request->all();
        $job->title  = $input['title'];
        $job->save();
        // $input = $request->all();
        // $job->JobTitle  = request('jobName');
        // $job->Description  = request('jobDescription');
        // $job->CreatedBy  = request('jobCreatedBy');
        // $job->CompanyName  = request('jobCompanyName');
        // $job->Link  = request('jobLink');
        // $job->Salary  = request('jobSalary');
        // $job->save();
        return response(['data' => $job, 'message' => 'Successfully Created!', 'status' => true,'jobs'=> $this->index()]);

    }

    public function update(Request $request, $id)
    {
       
        $job = CommJobsBoard::find($request->$id);
        if ($job == null) {
            return response(['message' => 'Something went wrong', 'status' => false]);
        }
        
 
    }

    public function delete($id)
    {
        {
        $job = CommJobsBoard::find($id);
        }
        
        if ($job == null) {
            return response(['message' => 'Something went wrong', 'status' => false]);
        }
        
        $job->delete();
        return response(['message' => 'job was deleted', 'status' => false ,'jobs'=> $this->index() ]);;
    }
}