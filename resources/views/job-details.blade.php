@extends('layouts.master')
@section('content')

<!-- ***** Call to Action Start ***** -->
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
                        <a href="#">Apply for this Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

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
                    <li><a href='#tabs-3'><i class="fa fa-phone"></i> Contact Details</a></li>
                </ul>
            </div>
            <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                    <article id='tabs-1'>
                        <h4>Job Description</h4>
                        <p>{{$jobPost->description}}</p>
                    </article>
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
