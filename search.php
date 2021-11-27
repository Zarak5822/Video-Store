
<?php 
require 'connection.php';
?>
<form action="" method="POST">
<input type="submit" name="submit" value="Search">
  <input type="text" name="search" placeholder="search">
  <input type="text" name="searchGenre" placeholder="search Genre">
</form>
<?php
  if(isset($_POST['search'])){
    $search_key=$_POST['search'];
    $search_key1=$_POST['searchGenre'];
    echo $search_key;
    $search_Qry="SELECT * FROM `movies` where  movie_genre LIKE '%$search_key1%' OR moive_name like '%$search_key%'";
    $result = $conn->query($search_Qry);
    
   
}
 
  ?>
  <html>
      <head>
          <title>

          </title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
           integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          
      </head>
      <body>
      
      <table class="table">
    <thead>
     
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
 <?php
  while($row = $result->fetch_assoc()){
    $movieName=$row["moive_name"];
    $movieReviews=$row["movie_reviews"];
    $id=$row["id"];
  ?>
      <tr>
        <td><?php echo $movieName ?></td>
        <td><?php echo $movieReviews?></td>
        
      </tr>
<?php
  }
?>
    
    </tbody>
  </table>
      </body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
          crossorigin="anonymous"></script>          
  </html>
  