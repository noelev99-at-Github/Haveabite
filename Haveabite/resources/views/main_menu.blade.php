<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css')}}" />
    <link href="https://fonts.cdnfonts.com/css/chewy" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/league-spartan" rel="stylesheet">
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
                     <a class="nav-link" aria-current="page" href="dashboard">Home</a>
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

     <div class="container text-center">
        <div>
            <img src="Images/menuTitle.png" style="width: 60%; height: 60%">
        </div>
        

     </div>


     <div class="container">
        
      <div class="row" style=" margin-top 20px;">
          @php
            $i = 1; 
          @endphp
          @foreach ($food_items as $item)
          @php
            $userz = DB::table('users')->where('id', $item->seller_id)->get();
          @endphp
          @foreach ($userz as $user)

          
          <div class="card shadow" style="width: 20rem; max-height: 100%; margin-left: 30px; margin-top: 30px;">
            <a><img class="card-img-top" src="{{ asset($item->images) }}" alt="Card image cap" style="width: 16rem; height: 9rem; margin-top:20px; margin-left:20px;"></a>

            <div class="card-body">
              <h5 class="card-title">{{ $item->food_name }}</h5>
              
            </div>

            <ul class="list-group list-group-flush">
              <li class="list-group-item">&#8369 {{ $item->price }}</li>
              <li class="list-group-item">
              <a href="" class="card-link" data-bs-toggle="modal" data-bs-target="#orderModal{{$i}}"><button class="btn btn-white btn btn-sm border border-success">&#128203 Order</button></a>
              <a href="" class="card-link" data-bs-toggle="modal" data-bs-target="#infoModal{{$i}}"><button class="btn btn-white btn btn-sm border border-warning">&#9432 More Info</button></a>
              </li>
            </ul>

          </div>


            <!-- More Information Modal -->
            <div class="modal fade" id="infoModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style="background-color:rgb(250, 203, 93);">
                    <h3>Food Item Information</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group-md mb-3">
                          <p><b>Food Name:</b> {{$item->food_name}}</p>
                        </div>

                        <div class="form-group-md mb-3">
                          <p><b>Seller Name:</b> {{$user->Fname}} {{$user->Mname}} {{$user->Lname}}</p>
                        </div>

                        <div class="form-group-md mb-3">
                          <p><b>Seller Email:</b> {{$user->email}}</p>
                        </div>

                        <div class="form-group-md mb-3">
                          <p><b>Seller Contact Number:</b> {{$user->number}}</p>
                        </div>
                  
                        
  
                        <div class="form-group mb-3">
                          <p><b>Price:</b> &#8369 {{$item->price}}</p>
                        </div>
                        
                        <div class="form-group mb-3 no-gutters">
                          <label><b>Ingredients:</b></label>
                          <p>{{$item->ingredients}}</p>
                        </div>

                        <div class="form-group mb-3">
                          <label><b>Description:</b></label>
                          <p>{{$item->desc}}</p>
                        </div>
  
                        
                        <div class="d-grid mx-auto text-center">
                            <div class="col-md-6" style="margin-left:-85px;">
                              <button type="button" class="btn btn-secondary border border-dark" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>

                  </div>
  
                </div>
              </div>
            </div>

            <!-- Order Modal -->
            <div class="modal fade" id="orderModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header text-light" style="background-color:green">
                    <h4>Create Order</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form method="POST" action="{{ url('create-order/'.$item->id) }}"  enctype="multipart/form-data">
                                
                        @csrf


  
                        <div class="form-group-md mb-1">
                            <p><b>Food Name:</b> {{$item->food_name}}</p>
                        </div>

                        <div class="form-group-md mb-1">
                          <p><b>Seller Name:</b> {{$user->Fname}} {{$user->Mname}} {{$user->Lname}}</p>
                        </div>

                        <div class="form-group-md mb-2">
                          <p><b>Seller Email:</b> {{$user->email}}</p>
                        </div>

                        <div class="form-group-md mb-4">
                          <p><b>Seller Contact Number:</b> {{$user->number}}</p>
                        </div>
                        

                        <div class="form-group mb-3">
                          <p><b>Price:</b> &#8369 {{$item->price}}</p>
                        </div>

                        <div class="form-group mb-3">
                          <label><b>Description:</b> </label>
                          <p>{{$item->desc}}</p>
                        </div>

                        <div class="form-group mb-3">
                          <label><b>Quantity:</b> </label>
                          <input enctype="multipart/form-data" type="number" placeholder="Quantity" id="qty" class="form-control-sm rounded-pill" value="1" name="qty" min="1" required>
                          @if ($errors->has('qty'))
                          <span class="text-danger">{{ $errors->first('qty') }}</span>
                          @endif
                        </div>
  
                        
                        <div class="d-grid mx-auto text-center">
                            <div class="col-md-12" style="">
                              <button type="button" class="btn btn-secondary border border-dark float-start" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn border border-dark float-end" style="background-color:rgb(250, 203, 93)">&#128203 Checkout</button>
                            </div>
                        </div>
  
                        
                    </form>
                  </div>
  
                </div>
              </div>
            </div>

          @php
            $i++;  
          @endphp

          @endforeach
          @endforeach
      </div>
          
    </div>

    <br>
    

     <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
</body>
</html>