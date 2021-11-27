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


if($movie_id==null){
    echo "please fill this field";
}
elseif($movie_name==null){
    echo "please fill this field";
}
elseif($movie_genre==null){
    echo "please fill this field";
}
elseif($movie_description==null){
    echo "please fill this field";
}
elseif($movie_actor==null){
    echo "please fill this field";
}
elseif($movie_review==null){
    echo "please fill this field";
}
elseif($movie_income==null){
    echo "please fill this field";
}
else{
$sql="Insert into movies (id,moive_name,movie_genre,movie_description,movie_actors,movie_reviews,movie_income,movie_poster) values (MD5('$movie_id'),'$movie_name','$movie_genre','$movie_description','$movie_actor','$movie_review','$movie_income','$movie_poster')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Data Has been Added Succesfully")</script>';
    // header("location: Movie-Insert.php");
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container align:center">
        <div class="row">
        <form class="support form-container " action="" method="POST" enctype="multipart/form-data">
                    
                    <h1 class="heading">Movies Name Insert here </h1>

                              <div class="form-group">
                              <label for="exampleInputName">Movie Id:</label>
                              <input required  type="text" class="form-control" name="movie_id" placeholder="Enter Id "/>
                              <span class="text-danger"></span>
                              </div>
                              <div class="form-group">
                              <label for="exampleInputName">Movie name:</label>
                              <input required  type="text" class="form-control" name="movie_name" placeholder="Enter Movie "/>
                              <span class="text-danger"></span>
                              </div>
                   
                            <div class="form-group">
                                  <label for="exampleInputGenre">Movie Genre</label>
                              <input required  type="text" class="form-control" name="movie_genre" placeholder="Enter Genre"/>
                               <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputDescription">Movie Description</label>
                              <input required  type="text" class="form-control" name="movie_description" placeholder="Enter Description"/>
                               <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputActor">Actors </label>
                              <input required  type="text" class="form-control" name="movie_actor" placeholder="Actor"/>
                               <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPIncome">Movie Income </label>
                              <input required  type="text" class="form-control" name="movie_income" placeholder="Income"/>
                               <span class="text-danger"></span>
                            </div>
                     
                          
                          
                  <div class="form-group">
                      <label for="exampleInputReviews">Reviews</label>
                      <div class="form-select">
                          <select required name="movie_review" id="" class="form-control">
                              <option value=""></option>
                              <option value="1 Star">1 Star</option>
                              <option value="2 Star">2 Star</option>
                              <option value="3 Star">3 Star</option>
                              <option value="4 Star">4 Star</option>
                              <option value="5 Star">5 Star</option>


                          </select>
                          <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                      </div>
                  </div>  
                      <div class="form-group">
                          <label for="movie_poster">Movie Title</label>
                          <input required type="file" name="movie_poster" id="moccupation" required class="form-control" placeholder="Enter Occupation" />
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