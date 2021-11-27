<?php

require 'connection.php';
if(isset($_POST['insert']))
{
$movie_id=$_POST['movie_id'];
$movie_name=$_POST['movie_name'];
$movie_genre=$_POST['movie_genre'];
$movie_description=$_POST['movie_description'];
$movie_actor=$_POST['movie_actor'];
$movie_review=$_POST['movie_review'];
$movie_income=$_POST['movie_income'];
$movie_poster=basename($_FILES['movie_poster']['name']);


$sql="Insert into movies (id,moive_name,movie_genre,movie_description,movie_actors,movie_reviews,movie_income,movie_poster) values (MD5('$movie_id'),'$movie_name','$movie_genre','$movie_description','$movie_actor','$movie_review','$movie_income','$movie_poster')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <script>

            function submitButtonStyle(_this) {
            _this.style.backgroundColor = "red";
            }
</script>
</head>
<body>
    <div class="container align:center">
        <div class="row">
        <form class="support form-container " action="" method="POST" enctype="multipart/form-data">
                    
                    <h1 class="heading">Rating </h1>

                              <div class="form-group">
                              <label for="exampleInputName"> Id:</label>
                              <input required  type="text" class="form-control" name="id" placeholder="Enter Id "/>
                              <span class="text-danger"></span>
                              </div>
                              <div class="form-group">
                              <label for="exampleInputName">Email:</label>
                              <input required  type="email" class="form-control" name="email" placeholder="Enter Email "/>
                              <span class="text-danger"></span>
                              </div>
                   
                     
                          
                                
                        <div class="form-group">
                            <label for="exampleInputReviews">Rating</label>
                            <div class="form-select">
                            
                          
                        
                                <i class="fas fa-star" name="1 star" onclick="submitButtonStyle(this)" type="submit"></i> 
                               
                                <i class="fas fa-star" onclick="submitButtonStyle(this)" type="submit"></i>  
                                <i class="fas fa-star" onclick="submitButtonStyle(this)" type="submit"></i>  
                                <i class="fas fa-star" onclick="submitButtonStyle(this)" type="submit"></i>  
                                <i class="fas fa-star" onclick="submitButtonStyle(this)" type="submit"></i>  

                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>  
                      
                  </div>
                  <div class="form-group btn-save">
            <input required   type="submit" name="insert" value="Save" class="btn btn-success btn-block">
            </div>    
                  </form>
</div>
</div>
</body>
</html>