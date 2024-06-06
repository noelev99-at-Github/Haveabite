<!DOCTYPE html>
<html>
<head>
    <title>HavaBite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css')}}">
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
                <a class="nav-link navvv" href="login">Log Out</a>
            </div>
        
              
          </nav>
    </div>

    <br>
    <br>


    <div class="container">
      <div class="row">
        <div class="col-8" style="margin-left: 80px;">
          <h1 style="font-family: 'Times New Roman', Times, serif;
          color: green;
          font-weight: bold;">"Where we connect people and food"</h1>
        </div>
      </div>
      <div class="row text-left">
        <div class="col-lg-5" style="margin-left: 100px;">
          <br>
          <br>
          <br>
          <p style="text-align:justify;">
            HAVABITE is a web application that aims to provide a centralized 
            platform for people who love food, delicacies and specialties. 
            We dream of fostering a community of food enthusiasts with the 
            help of technology. With the use of our web application we enable 
            our users to buy and sell food products. Our goal is to support 
            the start and progress of businesses by empowering potential 
            and current business owners with our IT Solution. As well as to make
            transaction more convenient and easier for the valued customers.
          </p> 
        </div>
  
        <div class="col-lg-5">
          <img class="pic" src="Images/homepageintro.png" alt="" />
        </div>
  
      </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>
</html>