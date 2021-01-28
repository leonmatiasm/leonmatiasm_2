<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Sitio web de presentación. Hola,soy Marco. Me gusta mucho programar, aúnque formalmente estoy estudiando derecho en la universidad. No se como decirle a mis padres." />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="shortcut icon" href="images/iconos/m.png"> 
    <meta name="author" content="Marco Antonio León Matías" />
    <title>Marco Antonio León Matías</title>
</head>
<body>
    <main>
        <div class="introduccion">
            <div class="perfil">
                <div class="foto">
                    <img src="images/perfil.jpg" alt="Foto de Marco. Su piel se ve algo amarillay hay un fondo oscuro.">
                </div>
                <div class="texto">
                    <p>
                        Hola, soy Marco. Me gusta programar con Javascript y PHP. Tengo 21 años de edad y 
                        deseo obtener un empleo como programador este año 2021.
                        Mis practicas con JS y PHP están en esta página. Si quieres puedes 
                        <a href="#redes" id="contacto">contactarme</a>.
                        
                    </p> 
                </div>
            </div>
            <div class="proyectos">
                <div class="caja">
                    <p class="caja_title">
                        Practicas
                    </p>
                    <div class="trabajo">
                        <h3><a href="">Página web de un estudiante de derecho</a></h3>
                        <p>
                            HTML, CSS, JS. Página que muestra las opiniones de un estudiante de derecho sobre temas 
                            que lo rodean. Es como un blog pero más simple.
                        </p>
                    </div>
                    <div class="trabajo">
                        <h3><a href="">Grabadora de voz</a></h3>
                        <p>
                            JS y PHP. Tiene solo 3 botones; iniciar, pausar, detener/guardar.
                            No almaceno nada en base de datos, uso el sistema del dispositivo y su propio 
                            almacenamiento.
                        </p>
                    </div>
                    <div class="trabajo">
                        <h3><a href="">Página de iniciar sesión</a></h3>
                        <p>
                            Utilicé cosas basicas de HTML como el form y los input. Use Javascript para hacer visible 
                            un contenedor y quitarlo a voluntad. 
                        </p>
                    </div>
                    <div class="trabajo">
                        <h3><a href="">Calculadora</a></h3>
                        <p>
                            Utilicé Javascript porque quería usar los id y los eventos.
                        </p>

                    </div>
                    <div class="trabajo">
                        <h3><a href="">Página modo oscuro</a></h3>
                        <p>
                            Usé Javascript para cambiar los estilos. Traté de guardar 
                            el cambio de estilo pero se borra al recargar la página.
                        </p>
                    </div>
                    <div class="trabajo">
                        <h3><a href="">Base de datos con MySQL</a></h3>
                        <p>
                            Practiqué con PHP y MySQL. Podrás guardar algunos datos y después consultarlos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <p class="inicios">
        ¿Cómo llegue aquí?
    </p>
    <section class="habilidades">
        <div class="lenguaje">
            <p class="icono icono_border_radiusright"><img src="images/iconos/html.svg" alt=""></p>
            <p class="texto">
                En 2017 compré un libro para aprender HTML5, creo que costó $250 pesos MXN. La verdad solo leí los primeros capitulos, porque me di cuenta que todo el 
                conocimiento para hacer páginas web está en internet😎.
            </p>
        </div>
        <div class="lenguaje">
            <p class="icono"><img src="images/iconos/css.svg" alt=""></p>
            <p class="texto">
                En 2017 fue cuando hice mis primeras practicas con HTML y CSS. Me emocioné al ver como aparecian las cosas en el navegador. Luego 
                comprendí que faltaba mucho para considerarme un programador. En ese entonces no sabía la diferencia entre desarrollador 
                front-end y back-end😋.
            </p>
        </div>
        <div class="lenguaje">
            <p class="icono"><img src="images/iconos/js.svg" alt=""></p>
            <p class="texto">
                Abandoné mucho el estudio del desarrollo web. En 2018 creo que en julio retomé el estudio, ahora de Javascript. 
                Primero vi las bases del lenguaje con videos en youtube, hice algunas practicas muy simples. Creí saber mucho. 
                Cuando me di cuenta de todo lo que faltaba por aprender me desilusioné un poco😐.
            </p>
        </div>
        <div class="lenguaje">
            <p class="icono  icono_border_radiusbottom"><img src="images/iconos/php.svg" alt=""></p>
            <p class="texto">
                En 2019 ingresé a la universidad. Entré a la carrera de Derecho en la Universidad Veracruzana. 
                Aún no me tomaba en serio la programación, mal gaste mucho tiempo en hacer nada. 
                La pandemia de Sars-Cov-2 (coronavirus) que comenzó en china a finales de 2019 hizo que en marzo de 2020 supendieron las clases 
                en México. 
                Durante el resto del 2020 me di cuenta que me gustaba la programación y que queria dedicarme a esto. 
                Según se gana bien en esta industria😁.
                <br>
                Con PHP me siento mucho más a gusto en el desarrollo web.
            </p>
        </div>
    </section>
    <section class="socialnetwork" id="redes">
        <a href="" class="twitter"><li class='fab fa-twitter'></li> Twitter</a>
        <a href="" class="github"><li class='fab fa-github'></li> Github</a>
    </section>
    <footer>
        <p>
             &copy;2020-2021  leonmatiasm <br>
             <i class='far fa-heart'></i>Gracias por ver mi página.
        </p>
    </footer>
</body>
</html>