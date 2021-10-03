@extends('layouts.master')
@section('content')
<section class="section bg-dark" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <a href="{{route('job-post.create')}}" class="btn btn-outline-success">Post a Job</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($jobPosts as $item)
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset('assets/images/job.svg')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>{{$item->title}}</h4>

                        <p>{{$item->designation}}</p>

                        <ul class="social-icons">
                            <li><a href="{{route('job-post.show', $item->id)}}">+ View More</a></li>
                        </ul>
                        <ul class="row">
                            <li><a class="btn btn-outline-success mx-3"
                                    href="{{route('job-post.edit', $item->id)}}">Edit</a>
                            </li>
                            <li>
                                <form action="{{route('job-post.delete', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger mx-3">Delete</button>
                                </form>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            {{$jobPosts->links()}}
            @endforeach
        </div>
    </div>
</section>
@endsection