<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    
    .row.content {height: 650px}
    
    
    .sidenav {
     /* padding-top: 20px;
      background-color: #f1f1f1;*/
      height: 100%;
    }
    .fai{
    color:#000FFF;
    font-size:30px;
    }
    
    
    
    
    
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>


  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
        
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    
    <div class="col-sm-8 text-center"> 
     
      <p class ="fai"><strong>This is website for managing tasks</strong>.</p>
      <hr>  
      <form action="index.php?page=accounts&action=login" method="POST">

      <!--<div class="container">-->
      <h5><b>Username</b></h5>
      <input type="email" placeholder="Enter Username" name="uname" required><br>

      <h5><b>Password</b></h5>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>

      <button type="submit" class="btn btn-primary">Login</button>
      <!--</div>-->
</form>
	<h5><a href="index.php?page=accounts&action=register">Register</a></h5>
    </div>
    <div class="col-sm-2 sidenav"> 
    </div>
  </div>
</div>



</body>
</html>
