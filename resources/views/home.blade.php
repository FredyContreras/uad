<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UAD</title>
    <!-- style -->
		<link rel="stylesheet" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-icons.min.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/style-metronic.css')}}"  rel="stylesheet"> -->
    <link href="{{asset('css/themes-light.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <!-- style  -->
</head>
<style media="screen">
    .page-sidebar-wrapper{
        width: 250px;
        height: 100%;
        position: fixed;
        box-shadow: 0px 2px 3px #ccc;
    }
</style>
<body class="login">

    <div class="container">
		<span class="mif-chevron-left mif-3x boton"></span>
		<nav>
			<ul id="menu_principal">
				<li><a href="#"><span class="mif-home mif-3x principales"></span>Inicio</a></li>
				<li>
					<label for="drop-1">
						<span class="mif-cart mif-3x principales"></span>
						Productos
						<span class="mif-chevron-right mif-2x derecha"></span>
						<span class="mif-expand-more mif-2x derecha"></span>
					</label>
					<input type="checkbox" id="drop-1">

					<ul>
						<li><a href="">Producto 1</a></li>
						<li><a href="">Producto 2</a></li>
						<li><a href="">Producto 3</a></li>
						<li><a href="">Producto 4</a></li>
						<li><a href="">Producto 5</a></li>
					</ul>
				</li>


				<li>
					<label for="drop-2">
						<span class="mif-widgets mif-3x principales"></span>
						Servicios
						<span class="mif-chevron-right mif-2x derecha"></span>
						<span class="mif-expand-more mif-2x derecha"></span>
					</label>
					<input type="checkbox" id="drop-2">

					<ul>
						<li><a href="">Servicio 1</a></li>

						<li>
							<label for="drop-3">
								Servicio 2
								<span class="mif-chevron-right mif-2x derecha"></span>
								<span class="mif-expand-more mif-2x derecha"></span>
							</label>
							<input type="checkbox" id="drop-3">
							<ul>
								<li><a href="">Elemento 1</a></li>
								<li><a href="">Elemento 2</a></li>
								<li><a href="">Elemento 3</a></li>
								<li><a href="">Elemento 4</a></li>
								<li><a href="">Elemento 5</a></li>
							</ul>

						</li>

						<li><a href="">Servicio 3</a></li>
						<li><a href="">Servicio 4</a></li>
						<li><a href="">Servicio 5</a></li>
					</ul>

				</li>


				<li><a href=""><span class="mif-organization mif-3x principales"></span>Nosotros</a></li>
				<li><a href=""><span class="mif-contacts-mail mif-3x principales"></span>Contacto</a></li>
			</ul>
		</nav>
	</div>

</body>
<!-- script  -->
<script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/menu.js')}}"></script>
<!-- script  -->


</html>
