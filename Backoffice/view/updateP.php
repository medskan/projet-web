<?php
$link = mysqli_connect("localhost", "root", "", "tfs"); 
$id=$_GET['id'];
$name=$_GET['name'];
$price=$_GET['price'];
$photo=$_GET['photo'];
$categ=$_GET['categ'];

echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE offre SET name='$name',price='$price',photo='$photo',categ='$categ' WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:offre.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 