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
                <div class="col-md-5 justify-content-center"  style="margin: auto;
                    margin-top: 2%; 
                    background-color: white;
                    border-radius: 25px;">
                    <br>
                    <div class="text-center">
                      <img src="{{ url('Images/Logo.png')}}" style="max-width: 20%;">
                    </div>
                    
                    <div class="text-center">
                      <img src="{{ url('Images/checkout.png')}}" style="max-width: 60%;">
                    </div>
                    <br>
                    <table class="table table-bordered data-table table-white">
                        <thead>
                          <tr>
                            <th>Order No.</th>
                            <th>Quantity:</th>
                            <th>Food Name:</th>
                            <th>Price:</th>
                            <th>Total Cost:</th>

                          </tr>
                        </thead>
                        <tbody>
                          @php
                            $i = 1;
                            $foods = DB::table('foods')->where('id', $orders->food_id)->get(); 
                            $users = DB::table('users')->where('id', $orders->buyer_id)->get();
                            $date = strtotime($orders->created_at);
                          @endphp
                          @foreach($foods as $food)

                              <tr>
                                <td>{{ $orders->id }}</td>
                                <td>{{ $orders->qty }}</td>
                                <td>{{$food->food_name}}</td>
                                <td>&#8369 {{$food->price}}</td>
                                <td>&#8369 {{ $orders->cost }}</td>
                                
                              </tr>
                            
                          @endforeach
                      </table>

                      @foreach($users as $user)
                      <div class="form-group-md mb-1">
                        <p><b>Date:</b> {{date('M/d/Y', $date)}}</p>
                        <p><b>Time:</b> {{date('h:i:s A', $date)}}</p>
                        <p><b>Address:</b> {{$user->address}}</p>
                        <p><b>Default Payment Method:</b> Cash on Delivery</p>
                      </div>
                      @endforeach
                      
                      <div class="d-grid mx-auto">
                        <div class="col-md-12">
                            <a href="{{url('cancel-order/'.$orders->id)}}"><button type="submit" class="btn btn-block btn btn-danger">Cancel</button></a>
                            <a href="{{ url('main_menu') }}"><button type="submit" class="btn btn-block inp float-end">Confirm Order</button></a>
                        </div>
                        <br>
                    </div>
                    


                </div>
                
            </div>
        </div>
    </main>
</body>
</html>