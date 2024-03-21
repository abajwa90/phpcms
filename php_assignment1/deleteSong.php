
<?php 
include('common/connection.php');
  if(isset($_POST['delete'])){
    $id = $_POST['music_id'];
    
    if (!$connection) {
      die("Connection failed: " . mysqli_connect_error());
    }
    $query = "DELETE FROM music WHERE `music_id` = '$id'";
    echo mysqli_error($connection);
    $music = mysqli_query($connection, $query);
    if($music){
      header('Location: index.php');
      exit;
    }else
    {
      echo mysqli_error($connection);
    }
  }
  mysqli_close($connection);
?>






