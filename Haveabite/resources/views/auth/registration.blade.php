<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/auth.css')}}">
    <title>HavaBite</title>
</head>
<body>
    <main class="signup-form">

        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4" style="margin: auto;
                margin-top: 2%;
                border: 5px solid rgb(250, 203, 93);  
                background-color: rgb(250, 203, 93);
                border-radius: 25px;">
                    <div class="" style="background-color: rgb(250, 203, 93);" >
                        <img id="logo" src="Images/Logo.png" alt="Logo" style="display: block;
                        margin-left: auto;
                        margin-right: auto;
                        max-width: 450px;">
                        <h3 class="text-center">Register User</h3>
                        <div class="card-body">
                            <form action="{{ route('register.custom') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Username" id="username" class="form-control" name="username"
                                        required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                        name="email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                        name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="First Name" id="Fname" class="form-control" name="Fname"
                                        required autofocus>
                                    @if ($errors->has('Fname'))
                                    <span class="text-danger">{{ $errors->first('Fname') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Middle Name" id="Mname" class="form-control" name="Mname"
                                        required autofocus>
                                    @if ($errors->has('Fname'))
                                    <span class="text-danger">{{ $errors->first('Mname') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Last Name" id="Lname" class="form-control" name="Lname"
                                        required autofocus>
                                    @if ($errors->has('Lname'))
                                    <span class="text-danger">{{ $errors->first('Lname') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Age" id="age" class="form-control" name="age"
                                        required autofocus>
                                    @if ($errors->has('age'))
                                    <span class="text-danger">{{ $errors->first('age') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Contact Number" id="number" class="form-control" name="number"
                                        required autofocus>
                                    @if ($errors->has('number'))
                                    <span class="text-danger">{{ $errors->first('number') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Address" id="address" class="form-control" name="address"
                                        required autofocus>
                                    @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto text-center">
                                    <button type="submit" class="btn btn-block inp">Sign up</button>
                                    <a href="login">I already have an account. Click Here to login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>