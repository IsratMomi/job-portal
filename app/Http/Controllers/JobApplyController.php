<?php

namespace App\Http\Controllers;

use App\Models\JobApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $job_post_id)
    {
        $this->validate($request, [
            "cv" => "required|file",
        ]);
        if ($request->hasFile('cv')) {
            $cv = Storage::disk("local")->put("cvs", $request->cv);
        }
        $data = [
            "user_id" => auth()->user()->id,
            "cv" => $cv,
            "job_post_id" => $job_post_id,
        ];

        $jobApply = new JobApply($data);

        if ($jobApply->save()) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function show(JobApply $jobApply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApply $jobApply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApply $jobApply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApply $jobApply)
    {
        //
    }

    public function download(JobApply $jobApply)
    {
        return response()->download($jobApply->cv);
    }
}
