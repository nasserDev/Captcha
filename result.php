<?php
session_start();
if($_SESSION['img_number'] != $_POST['num'])
{
    echo "<div align=center> ";
    echo " <font color = red> <h1> The number you entered doesnt match the image. </h1> </font> <br> <a href=form.php>Try Again</a><br>";
    echo "</div> ";
}else{
     echo "<div align=center> ";
    echo'<font color = green> <h1> The numbers Match! </h1> </font><br>
    <a href="form.php">Try Again</a><br>';
    echo "</div> ";
}
?>