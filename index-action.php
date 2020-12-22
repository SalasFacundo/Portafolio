<?php 




    if(isset($_POST))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $message=$_POST["email"];

        $cuerpo= "<h1> Remitente: $email </h1><br><br><br><br>

        <h2> Mensaje: </h2> <br><br>$message";


        @mail($name,"Portafolio",$cuerpo)
    }
    





    
    


?>










