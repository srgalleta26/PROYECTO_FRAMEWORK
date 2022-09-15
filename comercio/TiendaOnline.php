<?php session_start();?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

        <title>comprar</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>
    <body>

        <?php
    $carrito_mio=$_SESSION['carrito'];
    $_SESSION['carrito']=$carrito_mio;
    
    // contamos nuestro carrito
    if(isset($_SESSION['carrito'])){
        for($i=0;$i<=count($carrito_mio)-1;$i ++){
        if($carrito_mio[$i]!=NULL){ 
        $total_cantidad = $carrito_mio['cantidad'];
        $total_cantidad ++ ;
        $totalcantidad += $total_cantidad;
        }
    }
}

    ?>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrito de Compras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
                            
							<?php
                            $total=0;
							if(isset($_SESSION['carrito'])){
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){
						
                                      ?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="row col-12" >
									<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
									</div>
									<div class="col-6 p-0"  style="text-align: right; color: #000000;" >
									<span   style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> $</span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
							}
							}
							?>

                    
                            
							<li class="list-group-item d-flex justify-content-between">
							<span  style="text-align: left; color: #000000;">Total (MX)</span>
							<strong  style="text-align: left; color: #000000;"><?php
                            $total=0;
							if(isset($_SESSION['carrito'])){
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){ 
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
                        }
                    }

                            
							echo $total;  ?> $</strong>
                            

							</li>
						</ul>
					</div>
				</div>
			</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <!--<button-- type="button" class="btn btn-primary">Vaciar carrito</button-->
        <a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
      </div>
    </div>
  </div>
</div>


<!-- ********************************************************************************************************************************************* -->
<!-- Este es el Navbar -->

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Tienda en linea</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Inicio</a></li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Opciones</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            
                                <li><a class="dropdown-item" href="index.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                    

 

                   <form class="d-flex">


                   <!--    boton Carrito -->
                    
                        <button  type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                           
                        <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <?php if(!empty($fullname)) {?>
                            <?php echo $totalcantidad; ?>
                            <?php }?>
                            
                            
                            <!--<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>-->
                        </button>
                        

                    </form>
                </div>
            </div>
        </nav>


        <!-- Header-->
        <header class="bg-primary py-5">
            <div class="container px-1 px-lg-1 my-1">
                <div class="text-center text-dark">
                    <h1 class="display-4 fw-bolder">Bienvenido</h1>
                    <p class="lead fw-normal text-dark-50 mb-0">Todo lo necesario para ganar tus partidas</p>
                </div>
            </div>
        </header>


        <!-- PRODUCTOS-->
        <section class="bg-dark py-5">
            <div class="container px-5 px-lg-2 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-3">
                        <div class="card h-100">

                                 <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="899" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                            <!-- Product image-->
                            <img class="card-img-top" src="https://www.officedepot.com.mx/medias/77928.jpg-1200ftw?context=bWFzdGVyfHJvb3R8OTY3MzN8aW1hZ2UvanBlZ3xoYzAvaDliLzEwMDUxMzUzNTc1NDU0LmpwZ3w4OTM4MWIxODk1NTI4OWFjMDM5NmExYzY5MGQ2ZTQyNGQyNmVjMGM1YmViMDliMDMwYTFlZjFkNWEyOWMxZmJi" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Teclado Logitech</h5>
                                    <!-- Product price-->
                                    $899.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button type="submit" class="text-center"><a class="btn btn-outline-primary mt-auto">Agregar compra</a></button>
                                
                            </form>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="2600" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 2" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://ddtech.mx/assets/uploads/fc8b0f60926591e4e53a30ade41877bf.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Teclado Razer</h5>
                                    
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through"></span>
                                    $2600.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-primary mt-auto">Agregar compra</a></button>
                            </form>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="700" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 3" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://intercompras.com/images/product/COOLER_MASTER_SGB-3000-KKMF1-US.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Teclado CoolerMaster</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through"></span>
                                    $700.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-primary mt-auto">Agregar compra</a></button>
                            </form>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="850" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 4" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Product image-->
                            <img class="card-img-top" src="https://resource.logitechg.com/d_transparent.gif/content/dam/gaming/en/products/g502-lightspeed-gaming-mouse/g502-lightspeed-gallery-1.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mouse Gamer Logitech</h5>
                                    <!-- Product price-->
                                    $850.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form class="card-footer p-4 pt-5 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-primary mt-auto">Agregar compra</a></button>
                            </form>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="1460" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 5" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://assets3.razerzone.com/Sl8kUmgnHvfjtK-ofJrads4d7VY=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh95%2Fh52%2F9198280966174%2FDeathadder-Essential-500x500.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mouse Gamer Razer</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through"></span>
                                    $1450.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-primary mt-auto">Agregar compra</a></button>
                            </form>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="900" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 6" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Product image-->
                            <img class="card-img-top" src="https://media.digitalife.com.mx/products/27193/60975e90d0b41.webp" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mouse Gamer Cougar</h5>
                                    <!-- Product price-->
                                    $900.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-primary mt-auto" >Agregar compra</a></button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Derechos Reservados &copy; Tienda en linea 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
