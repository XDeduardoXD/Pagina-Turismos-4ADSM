<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteles</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
</head>
<body>
    <header>
        <a href="index.html" class="logo">4A DSM</a>
        <ul class="slide_right">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="historia.html">Historia</a></li>
            <li><a href="turismo.php">Su Turismo</a></li>
            <li><a href="listahoteles.php" class="active">Hoteles</a></li>
            <li><a href="grupo.html">Desarrolladores</a></li>
        </ul>
    </header>

    <section>
        <img src="img/hotel3.jpg" id="hotel3">
        <h2 id="text">HOTELES</h2>
        <a href="#sec" id="btn">Enterate</a>
    </section>

    <div class="sec" id="sec">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>HOTELES</h2>
                    <p style="text-align: justify;">En este apartado de te mostraremos diferentes 
                        opciones para tener la mejor experiencia en Palenque, Chiapas. Te daremos 
                        un listado con diferentes nombres de hoteles y todos sus datos, precios y 
                        numeros de contacto para que todo sea mas facil para ti y tu futuro viaje.
                        <br><br>
                    </p>

                    <center><img src="img/hotel2.jpg" width="70%"></center>
                    <br><br>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col">
                        <center>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Listado de hoteles ubicados en Palenque, Chiapas.
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col" style="text-align: center">Hotel</th>
                                        <th scope="col" style="text-align: center">Precios</th>
                                        <th scope="col" style="text-align: center">No. Telefonico</th>    
                                        <th scope="col" style="text-align: center">Dirección</th>
                                        <th scope="col" style="text-align: center">Pagina web</th>
                                        </tr>
                                    </thead>

                                    <tbody id="listahoteles">
                                        
                                    </tbody>

                                    </table>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>

        </div>
    </div>

    

    <footer>
        <div class="footer-content">
            <h3>TURISMO PALENQUE 2021</h3>
            <h4>¡Mira nuestras redes sociales!</h4>
            <h5>Y enterate de todo el contenido que tenemos para ti</h5>
            <ul class="socials">
                <li><a href="https://web.facebook.com/turismo.palenque"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/c/LugaresTur%C3%ADsticosdeM%C3%A9xico/videos"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </footer>

    <script>
        let arboles = document.getElementById('arboles');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let ruina = document.getElementById('ruina');
        let header = document.querySelector('header');

        window.addEventListener('scroll', function(){
            let value = window.scrollY;

            text.style.marginRight = value * 4 + 'px';
            btn.style.marginLeft = value * 4 + 'px';
            header.style.top = value * 0.5 + 'px';
        })
    </script>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="servicioClima.js"></script>
    <script type="module" src="firestore.js"></script>
</body>
</html>