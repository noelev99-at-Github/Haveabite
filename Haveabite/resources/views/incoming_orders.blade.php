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

    <div class="container text-center">
        <img src="Images/incoming.png" style="max-width:40%; margin-right:100px;">
    </div>
    
    <br>

    <div class="container">
        <table class="table table-bordered data-table table-light table-hover" style="width:100%">
            <thead class="table-warning">
            <tr>
                <th>Order No.</th>
                <th>Date:</th>
                <th>Buyer:</th>
                <th>Quantity:</th>
                <th>Food Name:</th>
                <th>Price:</th>
                <th>Total Cost:</th>
                <th>Order Status:</th>
                <th>Action:</th>

            </tr>
            </thead>
            <tbody>

            

            
            @foreach($foods as $food)
            @php
                $i = 1;
                $orders = DB::table('orders')->where('food_id', $food->id)->where('status', 'processing')->get(); 
            @endphp
            @foreach($orders as $order)
            

            

            @php
                    $users = DB::table('users')->where('id', $order->buyer_id)->get();
                    $date = strtotime($order->created_at);
            @endphp

            @foreach($users as $user)
                

                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{date('M/d/Y', $date)}}</td>
                    <td>{{ $user->Fname }} {{ $user->Mname }} {{ $user->Lname }}</td>
                    <td>{{ $order->qty }}</td>
                    <td>{{$food->food_name}}</td>
                    <td>&#8369 {{$food->price}}</td>
                    <td>&#8369 {{ $order->cost }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ url('update-order/'.$order->id) }}"><button class="btn btn-success">Update</button></a>
                    </td>
                    
                </tr>
                
            @endforeach  
            @endforeach
            @endforeach
        </table>
    </div>


   
         
    

    
    
    





    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>