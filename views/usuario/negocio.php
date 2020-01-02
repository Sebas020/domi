<!DOCTYPE html>
<html>
<head>
	<title>Negocio</title>
	<style type="text/css">
		.negocio{
			width: 70%;
			height: 700px;
			margin-top: 5px;
		}

		.jumbotron{
			background-color: gray !important;
		}

		.jumbotron img{
			position: absolute;
			width: 100%;
			height: 200px;

			opacity: 0.5;
		}

		#negocio_img{
			opacity: 1;
			width: 100px;
			height: 100px;
		}

		.jumbotron .parafo{
			position: relative;
			height: 200px;
		}

		.detalle{
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 2px 2px 10px #ccc;
		}

		#sidebar{
			width: 279px;
			height: 700px;
			padding: 2px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 2px 2px 10px #ccc;
		}

		@media (max-width: 1199px){
			.sub h4{
				margin-left: 10em !important;
			}
		}
	</style>
	<link rel="stylesheet" href="<?=base_url?>assets/bootstrap/dist/css/bootstrap.min.css" />
	<script src="<?=base_url?>assets/js/jquery.min.js"></script>
	<script src="<?=base_url?>helpers/main.js"></script>
	<script src="<?=base_url?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron m-0 p-0 picture">
			<img src="https://st2.depositphotos.com/1027198/9980/i/950/depositphotos_99804464-stock-photo-fast-food-hot-dogs.jpg">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="parafo">
							<img src="https://cdn.pixabay.com/photo/2017/08/08/18/09/burger-2612137_960_720.jpg" class="mt-5" id="negocio_img">
						</div>
					</div>
					<div class="col-sm-4 mt-5">
						<strong><h1>Nombre del Negocio</h1></strong>
					</div>
					<div class="col-sm-3 mt-5">
						<p>Distancia	|	tiempo entrega		| costo envio</p>
					</div>
				</div>	
			</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="negocio">
				<div class="row mb-5 detalle">
					<div class="col-sm-3 p-0 m-0">
						<img src="https://cdn.pixabay.com/photo/2017/08/08/18/09/burger-2612137_960_720.jpg" alt="Imagen Negocio" width="200" height="200">
					</div>
					<div class="col-sm-4">
						<small><h4 class="sub">Hamburguesa doble con papas + gaseosa</h4></small>

						<button class="btn btn-primary mt-5 ml-5">Medios de pago</button>
					</div>
					<div class="col-sm-4">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary mt-3 mb-2" data-toggle="modal" data-target="#exampleModalLong">
							Agregar Ingredientes 
						</button>
						<button class="btn btn-primary mt-5">Reseñas de los compradores</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Ingredientes</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div><div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-5 detalle">
					<div class="col-sm-3 p-0 m-0">
						<img src="https://cdn.pixabay.com/photo/2017/08/08/18/09/burger-2612137_960_720.jpg" alt="Imagen Negocio" width="200" height="200">
					</div>
					<div class="col-sm-4">
						<small><h4>Hamburguesa doble con papas + gaseosa</h4></small>

						<button class="btn btn-primary mt-5 ml-5">Medios de pago</button>
					</div>
					<div class="col-sm-4">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary mt-3 mb-2" data-toggle="modal" data-target="#exampleModalLong">
							Agregar Ingredientes 
						</button>
						<button class="btn btn-primary mt-5">Reseñas de los compradores</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Ingredientes</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div><div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-5 detalle">
					<div class="col-sm-3 p-0 m-0">
						<img src="https://cdn.pixabay.com/photo/2017/08/08/18/09/burger-2612137_960_720.jpg" alt="Imagen Negocio" width="200" height="200">
					</div>
					<div class="col-sm-4">
						<small><h4>Hamburguesa doble con papas + gaseosa</h4></small>

						<button class="btn btn-primary mt-5 ml-5">Medios de pago</button>
					</div>
					<div class="col-sm-4">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary mt-3 mb-2" data-toggle="modal" data-target="#exampleModalLong">
							Agregar Ingredientes 
						</button>
						<button class="btn btn-primary mt-5">Reseñas de los compradores</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Ingredientes</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div><div class="row">
											<div class="col-sm-6">
												Tomate
											</div>
											<div class="col-sm-6">
												<input type="checkbox" name="">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row ml-5">
				<div class="col-sm-4">
					<aside>
						<div id="sidebar" class="mt-1">
							<h2>Lo más pedido</h2>
							<p>Perros | Hamburguesa napolitana</p>
							<button type="button" class="btn btn-primary">
								Pedidos <span class="badge badge-light">9</span>
								<span class="sr-only">unread messages</span>
							</button>

							<hr>

							<h2>Lo más pedido</h2>
							<p>Salchipapas | Hamburguesa napolitana</p>
							<button type="button" class="btn btn-primary">
								Pedidos <span class="badge badge-light">10</span>
								<span class="sr-only">unread messages</span>
							</button>
							<hr>

							<h2>Lo más pedido</h2>
							<p>Salchipapas | Hamburguesa napolitana</p>
							<button type="button" class="btn btn-primary">
								Pedidos <span class="badge badge-light">7</span>
								<span class="sr-only">unread messages</span>
							</button>
							<hr>

							<h2>Lo más pedido</h2>
							<p>Salchipapas | Hamburguesa napolitana</p>
							<button type="button" class="btn btn-primary">
								Pedidos <span class="badge badge-light">3</span>
								<span class="sr-only">unread messages</span>
							</button>
						</div>
					</aside>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>