<?php
$link = mysqli_connect("localhost", "root", "", "tfs"); 
$id=$_GET['id'];
$nom=$_GET['nom'];
$description=$_GET['description'];
echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE categorie SET nom='$nom',description='$description' WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:categorie.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link); 
?> 