<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>


<body>

   <header>
        
        <ul class="nav-menu">
            <li>
                <a href="#" id="home">Home</a>
            </li>
           
            <li>
                <a href="#contenedor">Professional</a>
            </li>
            
            <li>
                <a href="#portafolio">Portafolio</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
            
        </ul>
        <ul class="nav-menu-right">
            <li>
                <a href="#">
                    <i class="fas fa-search"> </i>
                </a>
            </li>
        </ul>
    </header>


    <div id="vacio">
        <div class="texto">
            <p id="nombre"> I'M <br> FACUNDO <br>SALAS</p>        
            <p id="ocupacion"> UX/UI DESIGNER & WEB <br> DEVELOPER</p>
        </div>
        
    </div>


    <div id="contenedor"> 
        
            <center id="profesional"><p > 01. PROFESSIONAL</p>        </center>
            
            <center class="texto" id="ocupacion"><p > MY KNOWLEDGE LEVEL IN SOFTWARE</p>        </center>
            
            <center>
                <table>
                    <tr>
                        <td>Html & CSS</td>
                        <td>
                            <div class="barra" id="htmlCss">.</div>
                        </td>
                        <td>60%</td>
                    </tr>                    
                    <tr>
                        <td>Javascript</td>
                        <td>
                            <div class="barra" id="javascript">.</div>
                        </td>
                        <td>65%</td>
                    </tr>      
                    <tr>
                        <td>Java</td>
                        <td>
                            <div class="barra" id="java">.</div>
                        </td>
                        <td>80%</td>
                    </tr>      
                    <tr>
                        <td>Apex</td>
                        <td>
                            <div class="barra" id="java"> .</div>
                        </td>
                        <td>80%</td>
                    </tr> 
                    <tr>
                        <td>PHP</td>
                        <td>
                            <div class="barra" id="php"> .</div>
                        </td>
                        <td>75%</td>
                    </tr>
                    <tr>
                        <td>Sql</td>
                        <td>
                            <div class="barra" id="sql">.</div>
                        </td>
                        <td>85%</td>
                    </tr>
                    <tr>
                        <td>GitHub</td>
                        <td>
                            <div class="barra" id="github">.</div>
                        </td>
                        <td>90%</td>
                    </tr>      
                </table>
            </center>
              

    </div>


    
    <div id="portafolio">
        <center id="profesional"><p > 02. PORTAFOLIO</p>        </center>
            
        <center class="texto" id="ocupacion"><p > MY LASTEST WORK</p>        </center>

        <center>
        <div id="fotos">
            <img src="img/portafolio1.png" alt="">
            <img src="img/portafolio2.png" alt="">
            <img src="img/portafolio3.png" alt="">
        </div>
    </center>
    </div>








    <div id="contact">

        <center>
            <div id="bloqueContact">
                <div id="bloqueForm">


                    <div id="bloqueTexto">

                        <div id="titulo"><p > CONTACT </p>        </div>
                        <br><br>
            
                        <div id="subtitulo"><p > I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.<br><br><br>                         ​
                            
                            info@mysite.com
                            <br><br><br>              
                            Tel: 1-800-000-0000</p>        </div>
                    </div>




                    <form action="index-action" method="post">

                        <input type="text" id="name" name="name" placeholder="Name">
                        <input type="text" id="email" name="email" placeholder="Email"> <br>
                        <input type="text" id="phone" name="phone" placeholder="Phone"><br>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea><br>
                        <input type="submit" id="send" value="SEND">
                      
                    </form>






                    <a href="https://www.linkedin.com/in/salasfacundo/">
                        <img id=linkedin src="img/linkedin.png" alt="">
                    </a>
                </div>
            </div>
    </center>


    </div>

    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>