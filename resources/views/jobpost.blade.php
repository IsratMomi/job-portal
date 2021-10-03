<!doctype html>
<html lang="en">

<head>
    <title>Job Post</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="asset/css/style.css">


    <style>
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: black;
            text-align: left;
            background-color: black;
        }

        #postajob {
            margin-top: 100px;
            text-align: center;
            color: white;
        }

        #infosection {
            background-color: #f9735b;
            margin-top: 15%;
            margin-left: 300px;
            margin-right: 300px;
            border-radius: 50px;
            color: white;
        }

        #thejobportal {
            color: white;
            margin-left: 20px;
            margin-top: 20px;
            font-size: 50px;
        }

        #portal {
            color: #f9735b;
        }
    </style>
</head>

<body>

    @include('flash')
    <h3 class="mb-4" id="thejobportal">The Job <a href="/" id="portal">Portal</a></h3>

    <div id="infosection">
        <div class="w-100">
            <h3 class="mb-4" id="postajob">Post A Job</h3>
        </div>
        <div class="container">

            <form action="{{ route('job-post.store') }}" method="POST">
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
                <div class="form-group">
                    <label class="label" for="password-confirm" style="color:#f9735b">Confirm Password</label>
                </div>

            </form>
        </div>
    </div>




</body>

</html>