<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/x-icon" href="../favicon.ico">
        <script src="https://kit.fontawesome.com/35835e09d4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
       
    </head>
    <body>
        <header class="headerIndex">
            <section class="navYRedes">
               
                <nav class="navMenu">
                        <ul class="menu">
                            <li>
                                <a href="../index.php">INICIO</a>
                            </li>

                            <li>
                                <a href="./descripcion_proyecto.php">PROYECTOS</a>
                            </li>
                            
                            <li>
                                <a href="#">REGISTRO</a>
                            </li>
                        
                            <li>
                                <a href="./iniciar_sesion.php">MI CUENTA</a>
                            </li>
                            
                        </ul>

                </nav>
                
                <nav class="navRedes">
                    <ul class=redes>
                        <li>
                            <a href="../pages/iniciar_sesion.php">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#" >
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        
                        <li>
                            <a href="">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>

                    </ul>

                </nav>
            
            </section>
            
            <hr>
        </header>    
            
        <main class="mainRegistro">
            <h1>
                Página de Registro
            </h1>
            <section class="form">
                <form action="/my-handling-form-page" method="post">
                    <fieldset>
                            <legend><h2>Registrate</h2></legend>
                            <div class="userName">
                                <label for="user_name">Nombre:</label>
                                <input type="text" id="user_name" name="user_name" placeholder="Nombre" required size="30>
                            </div>
                            
                            <div class="lastName">
                                <label for="last_name">Apellido:</label>
                                <input type="text" id="last_name" name="last_name" placeholder="Apellido" required size="30>
                            </div>
                            
                            <div class="userMail">  
                                <label for="user_mail">E-mail:</label>
                                <input type="email" id="user_mail" name="user_mail" placeholder="nombre@email.com" required size="30">
                            </div>
                            
                            <div class="password">
                                <label for="password">Contraseña</label>
                                <input type="password" id="password" name ="password" placeholder="Contraseña" required size="30>
                            </div>
                        
                            <div class="birthday">
                                <label for="birthday">Fecha de Nacimiento:</label>
                                <input type="date" name="birthday" id="birthday">
                            </div>
                            
                            <div class="textArea">
                                <label for="consulta">Consulta:</label>
                                <textarea name="consulta" id="consulta" cols="40" rows="10">Escribí tu consulta</textarea>
                            </div>
                            <div class="checkbox">
                                <label for="checkbox">Acepto términos y condiciones</label>
                                <input type="checkbox" id="checkbox" value="cbox1">
                            </div>
                            
                            <div class="btnRegistro">
                                <input class="enviar" type="submit" value="Registrarme">
                                <input class="reset" type="reset" value="Limpiar">
                            </div>
                        </fieldset>
                </form>
            </section>
        
            
        </main>
        <footer class="footerRegistro">
           
        </footer>
        
    </body>
</html>