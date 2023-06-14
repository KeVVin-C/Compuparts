<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Style/poner Aqui Nombre Hoja Estilo" />
        <link href="estilo1.css" rel="stylesheet" type="text/css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600;800&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42ec7ee6fe.js" crossorigin="anonymous"></script>
        <style>
          div {
              padding: 16px;
              background-color: #8B3EC5;
            }
        </style>
    </head>
    <body>
        <div class="contenedor">
        <div class="cabecera">
            <header>
                <figure>
                    <img src="imagen/mouse principal.jpg" alt=""/>
                </figure>
                <h1 class="cabecera_h1">Tienda Online Compuparts</h1>
                <p class="cabecera_frase"> comercializacion de productos en linea</p>
                </header>
            
                <nav class="nav">
                    <a class="nav_link_1" href="Form_clientes.php">Registrarse</a>
                    <a class="nav_link_2" href="Form_login.php">Login</a>
                </nav> 
        </div>
            
            <div class="galeria">
              <div class="galeria_lienzo">
                <input type="radio" name="nav" class="elemento1" id="A"/>
                <input type="radio" name="nav" class="elemento2" id="B"/>
                <input type="radio" name="nav" class="elemento3" id="C"/>
                
                <div class="galeria_contenedor">
                    <figure>
                        <center>
                            <img src="imagen/Fondo 1.png" alt=""/>
                        </center>
                    </figure>
                    
                    <figure>
                        <center>
                            <img src="imagen/teclado portada.jpg" alt=""/>
                        </center>
                    </figure>
                    
                    <figure>
                        <img src="imagen/escritorio portada.jpg" alt=""/>
                    </figure>
                </div>
            </div>
            </div>
            
            <div class="controles">
                <label for="A"></label>
                <label for="B"></label>
                <label for="C"></label>
            </div>
            
            <section class="tienda">
            <article onclick=window.open("TECLADO1.php")>
                <figure><center><img src="imagen/teclado-tabla.jpg" alt=""/></center></figure>
                <font color="white">
                <h3>Teclados Gamer  </h3>
                </font>
                <font color="white">
                <p class="ColoDeLetras">Si estas interesado en teclados gamer dale click al cuadrado</p>
                </font> 
            </article>
            
            <article onclick=window.open("AUDIO1.php")>
                <figure><center><img src="imagen/diadema-tabla.png" alt=""/></center></figure>
                <font color="white">
                <h3>Perifericos de audio</h3>
                </font>
                <font color="white">
                <p>Si estas interesado en perifericos de audio dale click al cuadrado</p>
                </font> 
            </article>
            
            <article onclick=window.open("MOUSE1.php")>
                <figure><center><img src="imagen/mouse-tabla.png" alt=""/></center></figure>
                <font color="white">
                <h3>Mouses gamer</h3>
                </font>
                <font color="white">
                <p>Si estas interesado en mouse gamer dale click al cuadrado</p>
                </font> 
            </article>
            
            <article onclick=window.open("TARJETAGRAFICA1.php")>
                <figure><center><img src="imagen/tajetavideo-tabla.jpg" alt=""/></center></figure>
                <font color="white">
                <h3>Tarjetas de video</h3>
                </font>
                <font color="white">
                <p>Si estas interesado en tarjetas de video dale click al cuadrado</p>
                </font> 
            </article>
            
            <article onclick=window.open("PROCESADOR1.php")>
                <figure><center><img src="imagen/procesador-tabla.jpg" alt=""/></center></figure>
                <font color="white">
                <h3>Procesadores</h3>
                </font>
                <font color="white">
                <p>Si estas interesado en procesadores dale click al cuadrado</p>
                </font> 
            </article>
            
            <article onclick=window.open("MONITOR1.php")>
                <figure><center><img src="imagen/monitor-tabla.png" alt=""/></center></figure>
                <font color="white">
                <h3>Monitores gamer</h3>
                </font>
                <font color="white">
                <p>Si estas interesado en monitores gamer dale click al cuadrado</p>
                </font> 
            </article>
                
            </section>
            
            <div class="espacio"> </div>
            <div class="piepagina">
                <footer>
                    <p class="nombrenegocio"> Compuparts</p>
                    <p class="direccion"> direccion: Soacha parque</p>
                    <p> Telefono:9878765</p>
                    <p> Atencion de 8:00AM a 7:00PM</p>
                    <p> Web: www.compuparts.com</p>
                </footer>
                
            </div>
            
        </div>
    </body>
</html>
