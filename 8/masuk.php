<?php
$tnama= @$_POST["tnama"];
$tpass= @$_POST["tpass"];
if ($tnama=="admin" and $tpass=="123")
    {
        header("location:betul.php");
    }else
    {
        echo"USER NAME / PASSWORD SALAH";
    }
    ?>
    <P><P><P>
        <a href="pass.php">Back to Password</a>
        </P>