<?php
$link = mysqli_connect("localhost", "root", "", "tfs"); 
$id=$_GET['id'];
$name=$_GET['name'];
$description=$_GET['description'];
$photo=$_GET['photo'];
echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE activ SET name='$name',photo ='$photo',description='$description' WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:activ.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 