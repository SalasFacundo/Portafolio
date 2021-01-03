<?php 




    if(isset($_POST))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $message=$_POST["message"];


        $cuerpo= " <table border=1>
            <tr>
                 <td><h3>Nombre</td>
                 <td><h3>Email</td>
                 <td><h3>Telefono</td>
            </tr>
            <tr>
                 <td>$name</td>
                 <td>$email</td>
                 <td>$phone</td>

            </tr>   
        </table><br><br><br>
        $message";

        
       

        $headers = "From: $email\r\n";


        @mail('salasfacundo96@gmail.com', 'Portafolio', $cuerpo, $headers);


        
        echo "<script> alert('Mensaje enviado')</script>";

      header('Location: index.php?email=success');

    
      
    }









    
    


?>










