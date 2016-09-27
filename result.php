<?php
session_start();
if($_SESSION['img_number'] != $_POST['num'])
{
    echo "<div align=center> ";
    echo " <font color = red> <h2> The number you entered doesnt match the image. </h2> </font> <br> <a href=form.php>Try Again</a><br>"; 
    echo "</div> "; 
}else{
     echo "<div align=center> ";
    echo'<font color = green> <h2> The numbers Match! </h2> </font><br>
    <a href="index.php">Try Again</a><br>';
    echo "</div> ";
}
?>