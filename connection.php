<?php 
$conn=mysqli_connect("localhost","root","","residence");
if($conn==true){
    echo"connected";
}
else{
    echo"not connected";
}
?>