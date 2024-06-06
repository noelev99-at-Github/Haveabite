<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css')}}" />
    <title>HavaBite</title>
</head>
<body>
    
  <!--Background Images and Logo-->
    <br>
    <img class="webLogo" src="Images/Logonotagline.png" alt="">

    <img id="leaf" src="Images/leaf.png" alt="leaf">
    <img id="bump" src="Images/bump.png" alt="bump">
    <img id="splash" src="Images/splash.png" alt="splash">
    <img id="round" src="Images/round.png" alt="round">

  
  <!--NAVBAR DESIGN-->
    <div class="container">
        <nav class="navbar navbar-expand-lg border border-dark shadow">
            <div class="container">
              <button class="navbar-light navbar-toggler border-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="bookdata">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="main_menu">Food Menu</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="my_orders">My Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profile">Profile</a>
                  </li>
        
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Seller Tool's
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="nav-link" href="seller">Seller's Food Items</a></li>
                        <li><a class="nav-link dropdown-item" href="incoming_orders">Incoming Orders</a></li>
                      </ul>
                    
                  </li>
                  
                </ul>
                
              </div>
            </div>
        
            <div class="container d-grid gap-2 col-2 mx-auto">
                <a class="nav-link navvv" href="signout">Log Out</a>
            </div>
        
              
          </nav>
    </div>

    <br>
    <br>


    <!--Profile Information Section-->
    @foreach($users as $user)
    
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-lg-3" style="margin-left:140px;">
            <h2 class="text-center title">Personal Profile</h2>
          </div>
  
          <div class="col-lg-4" style="width: 31rem;">
           <button class="btn btn-primary float-end border border-dark" data-bs-toggle="modal" data-bs-target="#editModal">&#x270E Edit</button>
          </div>
        </div>
  
        <div class="row">

          <!--Profile Information Section FIRST BOX-->
          <div class="col-md-5 col-md-offset-5 text-left shadow" style="margin-left:150px; background-color: #facb5d; border-radius: 30px;">
            <br>
            <div class="container-fluid">
              <form>
                <div class="form-row mb-2">

                  <div class="col mb-2">
                    <a>First Name: </a>
                    <input type="text" class="form-control rounded-pill" id="Fname" name="Fname" placeholder="" value="{{$user->Fname}}" disabled>
                  </div>
                  <div class="col mb-2">
                    <a>Middle Name: </a>
                    <input type="text" class="form-control rounded-pill" id="Mname" name="Mname" placeholder="" value="{{$user->Mname}}" disabled>
                  </div>

                  <div class="col mb-2">
                    <a>Last Name: </a>
                    <input type="text" class="form-control rounded-pill" id="Lname" name="Lname" placeholder="" value="{{$user->Lname}}" disabled>
                  </div>

                  <div class="col mb-2">
                    <a>Address: </a>
                    <input type="text" class="form-control rounded-pill" id="address" name="address" placeholder="" value="{{$user->address}}" disabled>
                  </div>

                </div>
                <br>
              </form>
            </div>
            
          </div>

          <!--Profile Information Section SECOND BOX-->
          <div class="col-md-3 col-md-offset-3 text-left shadow" style="margin-left:25px; background-color: #facb5d; border-radius: 30px;">
            <br>
            <div class="container-fluid">
              <form>
                <div class="form-row mb-2">

                  <div class="col mb-2">
                    <a>Username: </a>
                    <input type="text" class="form-control rounded-pill" placeholder="" value="{{$user->username}}" id="username" name="username" disabled>
                  </div>
                  <div class="col mb-2">
                    <a>Email: </a>
                    <input type="text" class="form-control rounded-pill" placeholder="" value="{{$user->email}}" disabled>
                  </div>

                  <div class="col mb-2">
                    <a>Contact Number: </a>
                    <input type="text" class="form-control rounded-pill" placeholder="" value="{{$user->number}}" disabled>
                  </div>

                  <div class="col mb-2">
                    <div class="row">
                      

                      <div class="col-6">
                        <a>Age: </a>
                        <input type="text" class="form-control rounded-pill" placeholder="" value="{{$user->age}}" disabled>
                      </div>
                      
                    </div>
                  </div>

                  

                </div>
                <br>
              </form>
            </div>
            
          </div>
          
        </div>    
      </div>
    </div>



<!--Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header text-light" style="background-color:green">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('profile-update/'.$user->id) }}" method="POST"  enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-3">
            <h5>Username:</h5>
              <input type="text" placeholder="Username" id="username" class="form-control" name="username" value="{{$user->username}}"
                  required autofocus>
              @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('username') }}</span>
              @endif
          </div>
          <div class="form-group mb-3">
            <h5>Email:</h5>
              <input type="text" placeholder="Email" id="email" value="{{$user->email}}" class="form-control"
                  name="email" required autofocus>
              @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
          </div>

          <div class="form-group mb-3">
              <h5>First Name:</h5>
              <input type="text" placeholder="First Name" id="Fname" value="{{$user->Fname}}" class="form-control" name="Fname"
                  required autofocus>
              @if ($errors->has('Fname'))
              <span class="text-danger">{{ $errors->first('Fname') }}</span>
              @endif
          </div>
          <div class="form-group mb-3">
              <h5>Middle Name:</h5>
              <input type="text" placeholder="Middle Name" id="Mname" value="{{$user->Mname}}" class="form-control" name="Mname"
                  required autofocus>
              @if ($errors->has('Fname'))
              <span class="text-danger">{{ $errors->first('Mname') }}</span>
              @endif
          </div>
          <div class="form-group mb-3">
              <h5>Last Name:</h5>
              <input type="text" placeholder="Last Name" id="Lname" value="{{$user->Lname}}" class="form-control" name="Lname"
                  required autofocus>
              @if ($errors->has('Lname'))
              <span class="text-danger">{{ $errors->first('Lname') }}</span>
              @endif
          </div>
          <div class="form-group mb-3">
              <h5>Age:</h5>
              <input type="text" placeholder="Age" id="age" value="{{$user->age}}" class="form-control" name="age"
                  required autofocus>
              @if ($errors->has('age'))
              <span class="text-danger">{{ $errors->first('age') }}</span>
              @endif
          </div>
          <div class="form-group mb-3">
              <h5>Contact Number:</h5>
              <input type="text" placeholder="Contact Number" value="{{$user->number}}" id="number" class="form-control" name="number"
                  required autofocus>
              @if ($errors->has('number'))
              <span class="text-danger">{{ $errors->first('number') }}</span>
              @endif
          </div>
          <div class="form-group mb-3">
              <h5>Address:</h5>
              <input type="text" placeholder="Address" id="address" value="{{$user->address}}" class="form-control" name="address"
                  required autofocus>
              @if ($errors->has('address'))
              <span class="text-danger">{{ $errors->first('address') }}</span>
              @endif
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save changes</button>
          </div>
      </form>
      </div>
      
    </div>
  </div>
</div>
@endforeach
    

    
    
    





    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>