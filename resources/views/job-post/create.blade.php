@extends('layouts.master')
@section('content')
<section class="section bg-dark" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <a href="{{route('job-post.index')}}" class="btn btn-outline-light">Back</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <form class="text-light" action="{{ route('job-post.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label class="label" for="company_name">Company Name</label>
                    <input type="text" class="form-control" placeholder="Company Name" name="company_name"
                        id="company_name" value="{{ old('company_name') }}" required autocomplete="company_name">
                    @error('fcompany_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="title">Title</label>

                    <input type="text" class="form-control" placeholder="Title" name="title" id="title"
                        value="{{ old('title') }}" required autocomplete="title">
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="designation">designation</label>
                    <input type="text" class="form-control" placeholder="Designation" name="designation"
                        id="designation" value="{{ old('designation') }}" required autocomplete="designation">
                    @error('designation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="description">Description</label>
                    <textarea class="form-control" placeholder="Description" name="description" id="description"
                        required autocomplete="description" cols="30" rows="10">{{ old('designation') }}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3"
                        style="background-color:black;">Post</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection