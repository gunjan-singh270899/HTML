<?php
    date_default_timezone_set('asia/kolkata');
    $Name=$Phone=$email=$Address=$Message="";
    if(isset($_POST['submit']))
    {
      
    $Name=$_POST['Name'];
    $Phone=$_POST['Phone'];
    $email=$_POST['email'];
    $Address=$_POST['Address'];
    $Message=$_POST['Message'];
      
}

?>


 <!DOCTYPE html>
<html>
<head>
  <style type="text/css"> 
    

    

  </style>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <title></title>
</head>
<body style="background-color: black;">
  <script>
    function reset(){
      document.getElementById("name").innerHTML="";
       document.getElementById("Phone").innerHTML="";
        document.getElementById("email").innerHTML="";
         document.getElementById("Address").innerHTML="";
          document.getElementById("Message").innerHTML="";

    }
  </script>
<div class="row col-md-12" >
  <div class="grid-container  col-sm-6 col-md-6" style="  width:900px; height:2000px; text-align: center;" >
    <center>
      <div class="border" style=" background-color: #2196F3; width:500px; height:700px; text-align: center;">
        <img class="border"  width="150" height="150">
      
   
      <div class="h1"><h1 style="font-size:25px;"><b>Name:Gunjan Singh</h1></b></div>
      <div class="h2"><h2 style="font-size:20px;"><b >Contact:730413435</h2></b></div>
      <div class="h3"><h3 style="font-size:15px;"><b>Email:gunjansingh270899@gmail.com</h3></b></div>
    </div>
  </div>
      
</center>




      <div class="border" style=" background-color:blue; width:600px; height:800px; ">
        <center><center><h1>Contact Me</h1></center></center>
<div class="container-fluid rad pad mt-6" style="" >


<form class="row col-md-7" method="post" action="homework.php" >
  
  
  <div class="form-group col-md-12">
    <label for="exampleInputName1">Name</label>
    <input type="Name" class="form-control col-md-12" id="exampleInputName1" aria-describedby="Name" placeholder="Name" name="Name" value="<?php echo $Name?>">

 <div class="form-group col-md-12">
    <label for="exampleInputPhone1">Phone</label>
    <input type="Phone" class="form-control col-md-12 " id="exampleInputPhone1" placeholder="Phone" name="Phone" value="<?php echo $Phone?>">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control col-md-12" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?php echo $email?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

 <div class="form-group col-md-12">
    <label for="exampleInputAddress1">Address</label>
    <input type="Address" class="form-control col-md-14 " id="exampleInputAddress1" placeholder="Address"  style="height:40px;"name="Address" value="<?php echo $Address?>">
  </div>
  <div class="form-group col-md-12">
    <label for="exampleInputMessage1">Message</label>
    <input type="Message" class="form-control col-md-14 " id="exampleInputMessage1" placeholder="Message" name="Message" style="height:50px;" value="<?php echo $Message?>">
  </div>
   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
   <button type="Reset"  onclick="reset()" class="btn btn-info" name="Reset">Reset</button>
 
</form>
</div>

<div class="  container " style="background-color: red width: 400px; height: 300px">
 
  <?php
   
   echo $Name;
      echo "<br>";
      echo $Phone;
      echo "<br>"; 
      echo $email;
      echo "<br>";
     echo $Address;
      echo "<br>";
      echo $Message;
      echo "<br>";
      
    
      ?>
    </center>
    </div>

  </div>
</div>

</body>
</html>
