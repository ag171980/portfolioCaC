<?php include 'conexion.php'; ?>
<?php $conexion = new conexion();
$proyectos = $conexion->consultar("SELECT * FROM `proyectos`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Portfolio 😄</title>
</head>

<body>
    <div id="background" class="background"></div>
    <header id="sidebar">
        <h1 class="nombre">NG
            <svg id="closeMenu" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2c3e50" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
        </h1>

        <nav class="menu">
            <a class="menu-item" href="#sobremi"><img src="images/person.svg" alt=""></a>
            <a class="menu-item" href="#habilidades"><img src="images/terminal.svg" alt=""></a>
            <a class="menu-item" href="#proyectos"><img src="images/laptop.svg" alt=""></a>
        </nav>
        <img src="images/arrow-down.svg" alt="">
    </header>
    <main>

        <div id="sobremi" class="seccion sobremi">
            <div class="espacio"></div>
            <div class="contenedor">
                <div class="admin">
                    <div class="menu-hamb">
                        <button id="hamb"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg></button>
                    </div>
                    <svg id="admin" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#7bcaff" class="bi bi-key key-admin" viewBox="0 0 16 16">
                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                    <div id="content-admin" class="content-admin">
                        <form class="content" action="acciones/login.php" method="POST">
                            <div class="head-form">
                                <h4>Ingresar</h4>
                                <img id="closeForm" class="closeForm" src="images/x.svg" alt="">
                            </div>
                            <input type="email" name="email" placeholder="Ingrese email..." required />
                            <input type="password" name="pwd" placeholder="Ingrese pwd..." required />
                            <button type="submit">Ingresar</button>
                        </form>
                    </div>
                </div>
                <div class="titulo">
                    <h2>SOBRE MÍ</h2>
                    <div class="linea"></div>
                </div>
                <div class="info">
                    <div class="imagen-perfil">
                        <img src="images/profile.png" alt="">
                        <div class="efecto"></div>
                        <div class="efecto"></div>
                    </div>
                    <div class="descripcion-perfil">
                        <h3><span>NICOLAS</span> GUTIERREZ</h3>
                        <p>Soy un <span>DESARROLLADOR FRONTEND/BACKEND</span> autodidacta que busca capacitarse todos los dias aprendiendo y practicando.</p>
                        <div class="botones">
                            <a href="./CV - Nicolas Gutierrez.pdf" download>Descargar CV</a>
                            <div class="redes">
                                <a target="_blank" href="https://www.linkedin.com/in/alexis-nicolas-gutierrez/">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#7bcaff" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                    </svg></a>
                                <a target="_blank" href="https://github.com/ag171980">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#7bcaff" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="habilidades" class="seccion habilidades">
            <div class="espacio"></div>
            <div class="contenedor contenedor-h">
                <div class="titulo">
                    <h2>HABILIDADES</h2>
                    <div class="linea"></div>
                </div>
                <div class="habilidad">
                    <h3>Frontend</h3>
                    <div class="habilidad-front">
                        <div class="front">
                            <img src="images/habilidades/html.png" alt="">
                            <p>HTML</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/css.png" alt="">
                            <p>CSS</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/bootstrap.svg" alt="">
                            <p>BOOTSTRAP</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/js.png" alt="">
                            <p>JAVASCRIPT</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/sass.webp" alt="">
                            <p>SASS</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/vuejs.png" alt="">
                            <p>VUEJS</p>
                        </div>
                    </div>
                </div>
                <div class="habilidad">
                    <h3>Backend</h3>
                    <div class="habilidad-front">
                        <div class="front">
                            <img src="images/habilidades/php.webp" alt="">
                            <p>PHP</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/node.png" alt="">
                            <p>NODEJS</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/codeigniter.webp" alt="">
                            <p>CODEIGNITER</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/mysql.png" alt="">
                            <p>MYSQL</p>
                        </div>
                    </div>
                </div>
                <div class="habilidad">
                    <h3>Extras</h3>
                    <div class="habilidad-front">
                        <div class="front">
                            <img src="images/habilidades/figma.svg" alt="">
                            <p>FIGMA</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/PS.png" alt="">
                            <p>PHOTOSHOP</p>
                        </div>
                        <div class="front">
                            <img src="images/habilidades/PM.png" alt="">
                            <p>POSTMAN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="proyectos" class="seccion proyectos">
            <div class="espacio"></div>
            <div class="contenedor contenedor-p">
                <div class="titulo">
                    <h2>PROYECTOS</h2>
                    <div class="linea"></div>
                </div>
                <div class="proyectos">


                    <?php foreach ($proyectos as $proyecto) { ?>
                        <div class="proyecto">
                            <h3><?php echo $proyecto['nombre']; ?></h3>
                            <p><?php echo utf8_encode($proyecto['descripcion']); ?></p>
                            <div class="botones">
                                <button class="plus"><img src="images/plus.svg" alt=""></button>
                                <a target="_blank" href="<?php echo $proyecto['link_demo']; ?>"><img src="images/box-arrow-right.svg" alt=""> Visitar</a>
                            </div>
                            <div class="detalles">
                                <div class="contenedor-detalles">
                                    <img class="close" src="images/x.svg" alt="">
                                    <h4 class="titulo-detalles"><?php echo $proyecto['nombre']; ?></h4>
                                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="10000">
                                                <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="d-block w-100" alt="...">
                                            </div>
                                            <!-- <div class="carousel-item" data-bs-interval="2000">
                                                <img src="images/proyectos/amatista/amatista2.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="images/proyectos/amatista/amatista3.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="images/proyectos/amatista/amatista4.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="images/proyectos/amatista/amatista5.png" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="images/proyectos/amatista/amatista6.png" class="d-block w-100" alt="...">
                                            </div> -->
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <h4>Descripcion detallada</h4>
                                    <p><?php echo utf8_encode($proyecto['descripcion_detallada']); ?></p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <!-- <div class="proyecto">
                        <h3>AMATISTA</h3>
                        <p>Amatista es una tienda online de venta de lencería, corsetería y ropa deportiva femenina.</p>
                        <div class="botones">
                            <button class="plus"><img src="images/plus.svg" alt=""></button>
                            <a target="_blank" href="https://www.amatistamodayestilo.com.ar/"><img src="images/box-arrow-right.svg" alt=""> Visitar</a>
                        </div>
                        <div class="detalles">
                            <div class="contenedor-detalles">
                                <img class="close" src="images/x.svg" alt="">
                                <h4 class="titulo-detalles">AMATISTA</h4>
                                <div id="carouselExampleInterval1" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="images/proyectos/amatista/amatista1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="images/proyectos/amatista/amatista2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/proyectos/amatista/amatista3.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/proyectos/amatista/amatista4.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/proyectos/amatista/amatista5.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images/proyectos/amatista/amatista6.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <h4>Descripcion detallada</h4>
                                <p>Esta página web está hecha con Html, Css, Sass, Javascript, PHP, MySQL. Está siendo realizada para un emprendimiento de lencería, para que las dueñas del emprendimiento puedan vender sus productos desde la página de forma automática. Cuenta con listado de productos, disponibilidad segun talles y colores, función de carrito, pasarela de pagos (Mercado Pago, Tarjeta o Transferencia), envío automático de correos electrónicos y emisión automática de comprobantes/facturas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="proyecto">
                        <h3>WEATHER APP</h3>
                        <p>Es una app simple que consume la API de weatherstack.com .</p>
                        <div class="botones">
                            <button class="plus"><img src="images/plus.svg" alt=""></button>
                            <a target="_blank" href="https://ag171980.github.io/weather-app/"><img src="images/box-arrow-right.svg" alt=""> Visitar</a>
                        </div>
                        <div class="detalles">
                            <div class="contenedor-detalles">
                                <img class="close" src="images/x.svg" alt="">
                                <h4 class="titulo-detalles">WEATHER APP</h4>
                                <div id="carouselExampleInterval2" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="images/proyectos/weather-app/weather1.png" class="d-block w-100" alt="...">
                                        </div>

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <h4>Descripcion detallada</h4>
                                <p>Esta página web estática está hecha con Html, Css, Sass y Javascript. Está hosteada en Github Pages y no posee backend. Fue realizada como práctica para aprender el consumo de APIS, en este caso, del clima.</p>
                            </div>
                        </div>
                    </div>
                    <div class="proyecto">
                        <h3>BRUGGE</h3>
                        <p>Es una página web estática hecha para una distribuidora de cerveza artesanal.</p>
                        <div class="botones">
                            <button class="plus"><img src="images/plus.svg" alt=""></button>
                            <a target="_blank" href="https://ag171980.github.io/brugge/"><img src="images/box-arrow-right.svg" alt=""> Visitar</a>
                        </div>
                        <div class="detalles">
                            <div class="contenedor-detalles">
                                <img class="close" src="images/x.svg" alt="">

                                <div id="carouselExampleInterval3" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="images/proyectos/brugge/brugge1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="images/proyectos/brugge/brugge2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="images/proyectos/brugge/brugge3.png" class="d-block w-100" alt="...">
                                        </div>

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval3" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval3" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="proyecto">
                        <h3>HOTEL PANORAMA</h3>
                        <p>Es una página web estática hecha para un hotel ubicado en Entre Ríos como práctica de un curso.</p>
                        <div class="botones">
                            <button class="plus"><img src="images/plus.svg" alt=""></button>
                            <a target="_blank" href="https://ag171980.github.io/pagina-hoteleria/index.html"><img src="images/box-arrow-right.svg" alt=""> Visitar</a>
                        </div>
                        <div class="detalles">
                            <div class="contenedor-detalles">
                                <img class="close" src="images/x.svg" alt="">
                                <h4 class="titulo-detalles">HOTEL PANORAMA</h4>
                                <div id="carouselExampleInterval4" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="images/proyectos/hotel/hotel.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <img src="images/proyectos/hotel/hotel2.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <img src="images/proyectos/hotel/hotel3.png" class="d-block w-100" alt="...">
                                        </div>

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval4" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval4" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <h4>Descripcion detallada</h4>
                                <p>Esta página web estática está hecha con Html, Css y Javascript. Esta hosteada en Github Pages y no posee backend. Fue realizada como práctica en un curso de Desarrollo Web de Potrero Digital</p>
                            </div>
                        </div>
                    </div>
                    <div class="proyecto">
                        <h3>CASA DE DIOS</h3>
                        <p>Es una página web estática dedicada para una organización que se dedica a ayudar a la gente en situacion de calle.</p>
                        <div class="botones">
                            <button class="plus"><img src="images/plus.svg" alt=""></button>
                            <a target="_blank" href="https://casa-de-dios-4f04d.firebaseapp.com"><img src="images/box-arrow-right.svg" alt=""> Visitar</a>
                        </div>
                        <div class="detalles">
                            <div class="contenedor-detalles">
                                <img class="close" src="images/x.svg" alt="">
                                <h4 class="titulo-detalles">CASA DE DIOS</h4>
                                <div id="carouselExampleInterval5" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <img src="images/proyectos/cddios/cddios1.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="images/proyectos/cddios/cddios2.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval5" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval5" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <h4>Descripcion detallada</h4>
                                <p>Esta aplicación web está hecha con VueJS y SASS. Esta hosteada en firebase y no posee backend.</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </main>
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>