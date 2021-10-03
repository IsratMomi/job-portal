<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <style>

        body{
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: black;
            text-align: left;
            background-color: black; 
        }

        #infosection{
            background-color: #f9735b; 
            margin-top: 15%;
            margin-left: 300px;
            margin-right: 300px;
            border-radius: 50px;
            color: white;
        }

        #signin, #signup{
            margin-top: 100px;
            text-align: center;
            color: white;
        }
        #thejobportal{
            color: white;
            margin-left: 20px;
            margin-top: 20px;
            font-size: 50px;
        }
        #portal{
            color: #f9735b;
        }








        

    </style>

</head>

<body>
<h3 class="mb-4" id="thejobportal">The Job <a id="portal">Portal</a></h3>
<div id="infosection">
<div class="w-100">
        <h3 class="mb-4" id="signin">Sign In</h3>
    </div>
    <div class="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label class="label" for="email">Email</label>
                <input type="email" class="form-control" placeholder="john.doe@mail.com" name="email" id="email"
                    value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="label" for="password">Password</label>
                <input type="password" class="form-control" placeholder="*********" id="password" name="password"
                    required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3" style="background-color:black;">Sign In</button>
            </div>
        </form>
    </div>

    <div class="text w-100" id="signup">
        <p>Don't have an account?</p>
        <a href="{{route('register')}}" class="btn btn-white btn-outline-white" style="color:white;">Sign Up</a>
    </div>
</div>
    

</body>

</html>
