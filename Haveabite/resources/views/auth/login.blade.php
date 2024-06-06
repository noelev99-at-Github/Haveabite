<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/auth.css')}}">
    <title>HAVABITE</title>
</head>
<body>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4 justify-content-center"  style="margin: auto;
                    margin-top: 2%;
                    border: 5px solid rgb(250, 203, 93);  
                    background-color: rgb(250, 203, 93);
                    border-radius: 25px;">
                    <br>
                    <img class="logo" id="logo" src="Images/Logo.png" alt="logo" style="display: block;
                    margin-left: auto;
                    margin-right: auto;
                    max-width: 450px;">
                    <h3 class="text-center">Login User</h3>
                    <br>
                    <form method="POST" action="{{ route('login.custom') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Username" id="username" class="form-control" name="username" required
                                autofocus>
                            @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="d-grid mx-auto text-center">
                            <button type="submit" class="btn btn-block inp">Login</button>
                            <a href="registration">Dont't have an account? Click Here to register</a>
                        </div>
                        <br>
                    </form>

                </div>
                
            </div>
        </div>
    </main>
</body>
</html>