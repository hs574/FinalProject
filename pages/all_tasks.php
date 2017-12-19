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
    
    
    
    
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    
    .glyphicon {
    height:42px;
    font-size: 18px;
}

.glyphicon1 {
    color: white;
    background-color: #337ab7;
    border-color: #2e6da4;
    padding: 10px 43px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 14px;
    right:426px; //important//
    top: 173px !important;
    


    
}

    label{
      width:100px;
    }
  </style>
</head>


<body text-align:center>


  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
  
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
      <li><div>
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" class="glyphicon1 glyphicon-user">Your Profile</button>
        </form></div></li>
        
        <li><div>
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" class="glyphicon1 glyphicon-log-out">Logout</button>
        </form></div></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center">
<body>

<?php
$text='';
$text.='<h2>Pending Tasks</h2><br>';
$text.='<a href="index.php?page=tasks&action=create"><span class="glyphicon glyphicon-plus">Create New Task</span></a>';


if($data==FALSE){
  $text.='No records found';
  $text.='</center>';
  echo $text;
}
else{

$text.=utility\htmlTable::genarateTableFromMultiArray($data);
echo $text;
}
?>

</div>

<div class="col-sm-2 sidenav">
    </div>
  </div>
</div>




<script src="js/scripts.js"></script>
</body>
</html>