<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("job-post.index", [
            "jobPosts" => JobPost::where("user_id", auth()->user()->id)->latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("job-post.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            "company_name" => "required|string",
            "title" => "required|string",
            "designation" => "required|string",
            "description" => "required|string",
        ]);

        $jobPost = new JobPost($data);

        $jobPost->user_id = auth()->user()->id;
        if ($jobPost->save()) {
            return redirect()->route("job-post.index");
        } else {
            return back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function show(JobPost $jobPost)
    {
        return view('job-post.show', [
            "jobPost" => $jobPost,
            "jobApplies" => $jobPost->jobApplies,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost)
    {
        return view('job-post.edit', compact('jobPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $jobPost)
    {
        $data = $this->validate($request, [
            "company_name" => "required|string",
            "title" => "required|string",
            "designation" => "required|string",
            "description" => "required|string",
        ]);

        if ($jobPost->update($data)) {
            return redirect()->route("job-post.show", $jobPost);
        } else {
            return back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $jobPost)
    {
        if ($jobPost->delete()) {
            return back()->with('success', 'Successfully deleted!');
        } else {
            return back()->with('error', 'Something went wrong!');
        }
    }
}
