<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css')}}">
    <link href="https://fonts.cdnfonts.com/css/chewy" rel="stylesheet">
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

     <div class="container text-center">
        <div class="row">
          <div class="col-9">
            <img src="Images/sellerTitle.png" alt="">
          </div>
            
          <div class="col-3">
            <button class="btn btn-warning rounded-pill" style="margin-top: 50px" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Food Item</button>
          </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <img src="Images/add-item.png" style="width: 300px; margin-left:70px;">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('store_item') }}"  enctype="multipart/form-data">
                              
                      @csrf


                      <div class="form-group-md mb-3">
                          <input type="text" placeholder="Food Name" id="food_name" class="form-control rounded-pill" name="food_name" required
                              autofocus>
                          @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                          @endif
                      </div>

                      <div class="form-group mb-3">
                          <input enctype="multipart/form-data" type="number" placeholder="Item Price" id="price" class="form-control rounded-pill" name="price" step="0.01" required>
                          @if ($errors->has('price'))
                          <span class="text-danger">{{ $errors->first('price') }}</span>
                          @endif
                      </div>

                      <div class="form-group mb-3">
                        <input enctype="multipart/form-data" type="text" placeholder="Ingredients" id="ingredients" class="form-control rounded-pill" name="ingredients" required>
                        @if ($errors->has('ingredients'))
                        <span class="text-danger">{{ $errors->first('ingredients') }}</span>
                        @endif
                      </div>

                      <div class="form-group mb-3">
                        <input enctype="multipart/form-data" type="text" placeholder="Description" id="desc" class="form-control rounded-pill" name="desc" required>
                        @if ($errors->has('desc'))
                        <span class="text-danger">{{ $errors->first('desc') }}</span>
                        @endif
                      </div>

                      <div class="form-group mb-3">
                        <label class="">
                          <span class="sr-only" for="image">Choose Image File</span>
                          <input type="file" name="image" id="image" enctype="multipart/form-data"
                              class="form-control-file block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required/>
                          @error('image')
                          <span class="text-red-600 text-sm">{{ $message }}</span>
                          @enderror
                        </label>
                      </div>
                      
                      <div class="d-grid mx-auto text-center">
                          <div class="col-md-3">
                            <button type="submit" class="btn btn-success rounded-pill">Insert Item</button>
                          </div>
                      </div>

                      
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
        
      </div>

      
      <div class="container">
        
        <div class="row" style=" margin-top 20px;">
            @php
              $i = 1;  
            @endphp
            @foreach ($food_items as $item)
            
            <div class="card shadow" style="width: 20rem; max-height: 100%; margin-left: 30px; margin-top: 30px;">
              <a><img class="card-img-top" src="{{ asset($item->images) }}" alt="Card image cap" style="width: 16rem; height: 9rem; margin-top:20px; margin-left:20px;"></a>

              <div class="card-body">
                <h5 class="card-title">{{ $item->food_name }}</h5>
                <p class="card-text">{{ $item->desc }}</p>
                
              </div>

              <ul class="list-group list-group-flush">
                <li class="list-group-item">&#8369 {{ $item->price }}</li>
                <li class="list-group-item">
                  <a href="" class="card-link" data-bs-toggle="modal" data-bs-target="#editModal{{$i}}"><button class="btn btn-white btn btn-sm border border-dark">&#x270E Edit</button></a>
                <a href="" class="card-link" data-bs-toggle="modal" data-bs-target="#delModal{{$i}}"><button class="btn btn-white btn btn-sm border border-danger"><img src="Images/removebutton.png" style="max-width: 20px;"> Delete</button></a>
                </li>
              </ul>

            </div>

            <!-- Delete Modal -->
              <div class="modal fade" id="delModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Food Item</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <h5>Are you sure you want to delete food item "{{ $item->food_name }}"?</h5>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-white border border-dark" data-bs-dismiss="modal">Cancel</button>
                      <a href="{{ url('delete-item/'.$item->id) }}" class="card-link"><button class="btn btn-white border border-danger"><img src="Images/removebutton.png" style="max-width: 20px;"> Delete</button></a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Edit Modal -->
              <div class="modal fade" id="editModal{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5>Edit Food Item</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('update-item/'.$item->id) }}"  enctype="multipart/form-data">
                                  
                          @csrf
    
    
                          <div class="form-group-md mb-3">
                              <p>Food Name: </p>
                              <input type="text" placeholder="Food Name" id="food_name" class="form-control rounded-pill" value="{{$item->food_name}}" name="food_name" required 
                                  autofocus>
                              @if ($errors->has('food_name'))
                              <span class="text-danger">{{ $errors->first('food_name') }}</span>
                              @endif
                          </div>
    
                          <div class="form-group mb-3">
                              <p>Price: </p>
                              <input enctype="multipart/form-data" type="number" placeholder="Item Price" id="price" class="form-control rounded-pill" name="price" step="0.01" value="{{$item->price}}" required>
                              @if ($errors->has('price'))
                              <span class="text-danger">{{ $errors->first('price') }}</span>
                              @endif
                          </div>

                          <div class="form-group mb-3">
                            <p>Ingredients: </p>
                            <input enctype="multipart/form-data" type="text" placeholder="Ingredients" id="ingredients" class="form-control rounded-pill" value="{{$item->ingredients}}" name="ingredients" required>
                            @if ($errors->has('ingredients'))
                            <span class="text-danger">{{ $errors->first('ingredients') }}</span>
                            @endif
                          </div>
    
                          <div class="form-group mb-3">
                            <p>Description: </p>
                            <input enctype="multipart/form-data" type="text" placeholder="Description" id="desc" class="form-control rounded-pill" value="{{$item->desc}}" name="desc" required>
                            @if ($errors->has('desc'))
                            <span class="text-danger">{{ $errors->first('desc') }}</span>
                            @endif
                          </div>
    
                          <div class="form-group mb-3">
                            <label class="">
                              <span class="sr-only" for="image">Choose Image File</span>
                              <input type="file" name="image" id="image" enctype="multipart/form-data"
                                  class="form-control-file block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"/>
                              @error('image')
                              <span class="text-red-600 text-sm">{{ $message }}</span>
                              @enderror
                            </label>
                          </div>
                          
                          <div class="d-grid mx-auto text-center">
                              <div class="col-md-6" style="margin-left:-40px;">
                                <button type="button" class="btn btn-white border border-dark" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success border border-success">Update</button>
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
        </div>
            
      </div>

      <br>
    

     <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
  </script>
</body>
</html>