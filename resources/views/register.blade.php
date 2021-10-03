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

        #infosection {
            background-color: #f9735b;
            margin-top: 7%;
            margin-left: 300px;
            margin-right: 300px;
            border-radius: 20px;
            color: white;
        }

        #signup {
            margin-top: 100px;
            text-align: center;
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

        #fields {
            margin-left: 50px;
            margin-right: 50px;
            margin-bottom: 50px;
        }
    </style>

</head>

<body>
    <h3 class="mb-4" id="thejobportal">The Job <a id="portal">Portal</a></h3>
    <div id="infosection">
        <!--comment line-->


        <div class="w-100">
            <h3 class="mb-4" id="signup">Sign Up</h3>
        </div>
        <form id="fields" action="{{ url('/register') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label class="label" for="first_name">First Name</label>
                <input type="text" class="form-control" placeholder="First Name" name="first_name" id="first_name"
                    value="{{ old('first_name') }}" required autocomplete="first_name">
                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="label" for="last_name">Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="last_name"
                    value="{{ old('last_name') }}" required autocomplete="last_name">
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="label" for="user_type">User Type</label>
                <select name="user_type" class="form-control" id="user_type" required>
                    <option value="0">Employee</option>
                    <option value="1">Company</option>
                </select>
                @error('user_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
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
            <div class="form-group mb-3">
                <label class="label" for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" placeholder="*********"
                    name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group">
                <button type="submit" class="form-control btn btn-primary submit px-3"
                    style="background-color:black;">Sign Up</button>
            </div>

            <div class="form-group">
                <label class="label" for="password-confirm" style="color:#f9735b">Confirm Password</label>
            </div>
        </form>

    </div>

</body>

</html>