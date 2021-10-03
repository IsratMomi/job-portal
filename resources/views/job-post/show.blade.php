@extends('layouts.master')
@section('content')

<!-- ***** Call to Action End ***** -->
@if (auth()->user()->isEmployee())
<section class="section section-bg" id="call-to-action"
    style="background-image: url({{asset('assets/images/banner-image-1-1920x500.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2><em>$70 000</em></h2>
                    <p>Security officer - luxury retail</p>

                    <div class="main-button">
                        <form action="{{route('job-post.apply-job.store', $jobPost->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="cv" class="text-light">Insert your CV</label>
                                <input type="file" class="form-control" name="cv" id="cv">
                            </div>
                            <button>Apply for this Job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <br>
        <br>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('assets/images/job-image-1-1200x600.jpg')}}"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/images/job-image-1-1200x600.jpg')}}"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('assets/images/job-image-1-1200x600.jpg')}}"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <br>
        <br>

        <div class="row" id="tabs">
            <div class="col-lg-4">
                <ul>
                    <li><a href='#tabs-1'><i class="fa fa-cog"></i> Job Description</a></li>
                    @if (auth()->user()->isCompany())
                    <li><a href='#tabs-2'><i class="fa fa-user"></i> Applied Candidate</a></li>
                    @endif
                    <li><a href='#tabs-3'><i class="fa fa-phone"></i> Contact Details</a></li>
                </ul>
            </div>
            <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                    <article id='tabs-1'>
                        <h4>Job Description</h4>
                        <p>{{$jobPost->description}}</p>
                    </article>
                    @if (auth()->user()->isCompany())
                    <article id='tabs-2'>
                        <h4>Applied</h4>

                        <div class="row">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Download CV</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobApplies as $index => $item)
                                    <tr>
                                        <th scope="row">{{$index+1}}</th>
                                        <td>{{$item->user->first_name}}</td>
                                        <td>{{$item->user->last_name}}</td>
                                        <td>{{$item->user->email}}</td>
                                        <td>
                                            <a href="{{route('job-post.apply-job.download', $item->id)}}">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </article>
                    @endif
                    <article id='tabs-3'>
                        <h4>Contact Details</h4>

                        <div class="row">
                            <div class="col-sm-6">
                                <label>Name</label>

                                <p>{{$jobPost->user->first_name . " " . $jobPost->user->last_name}}</p>
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <p>{{$jobPost->user->email}}</p>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- ***** Fleet Ends ***** -->
@endsection