<?php
require 'connection.php';
$id = $_GET["movie"];
$sql = "SELECT moive_name,movie_genre,movie_description,movie_actors,movie_reviews,movie_income,movie_poster FROM movies where id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$movieName=$row["moive_name"];
$movieGenre=$row["movie_genre"];
$movieDescription=$row["movie_description"];
$movieActor=$row["movie_actors"];
$moviereviews=$row["movie_reviews"];
$movieIncome=$row["movie_income"];


  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>
</head>
<body>
<div class="container mt-5">
    <div class="row ">
        <div class="col-md-4">
        <a href=""><?php echo "<img class='card-img-top' src='./img/".$row["movie_poster"]."' alt='Card image cap'>"?>
    </a>
        <h5 class="card-title mt-5 text-center">Income....</h5> 
        <h5 class="card-title  text-center"><?php echo $movieIncome;?></h5> 
       


        </div>
        <div class="col-md-8">
        <h4 class="card-title "><?php echo $movieName;?></h4>
        <h5 class="card-title mt-5"><?php echo $movieDescription;?></h5>
        <h5 class="card-title mt-5"><?php echo $movieActor;?></h5> 
        <h5 class="card-title mt-5"><?php echo $moviereviews;?></h5>   
        <hr>
        <h5 class="card-title mt-5">The Last Duel</h5>
        <h5 class="card-title mt-5">The Last Duel</h5>  
        <br>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>  
        </div>
</div>
</div>
<?php

 $Email = $_POST["email"];
 $rating = $_POST["rating"];
 $comment=$_POST['comments'];
 if($Email==null){
     echo "please fill the email field ";
 }
 else{
 

 $sql = "INSERT INTO `ratings`(`id`, `email`, `rating`,`comments`, `movie_name`) VALUES ('','$Email','$rating','$comment','test')";
 if (mysqli_query($conn, $sql))
 {
     
     echo '<script>alert("Thank you for you Reviews")</script>';
 }
 else
 {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 mysqli_close($conn);

}

?>
<div class="container mt-5">
<div class="row">
    <div class="col-md-12">
    <form action="" method="post">

                <h1 class="heading">Rating and Reviews </h1>
                   <div class="form-group">
                 
                    <div class="form-group">
                    <label for="exampleInputName">Email:</label>
                    <input required  type="email" class="form-control" name="email" placeholder="Enter Email "/>
                    <span class="text-danger"></span>
                    </div>

                    <label for="exampleInputName"> Comments</label>
                    <textarea required  type="text" class="form-control" name="comments" placeholder="Enter Id "></textarea>
                    
                    </div>
                    <div class="rateyo" id= "rating"
                    data-rateyo-rating="4"
                    data-rateyo-num-stars="5"
                    data-rateyo-score="3">
                    </div>

                    <span class='result'>0</span>
                   <input type="hidden" name="rating">

                   <div class="form-group btn-save mt-5">
            <input required   type="submit" name="insert" value="Save" class="btn btn-success btn-block">
            </div>    
       
</form>
        </div>
    </div>
</div>
</div>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>