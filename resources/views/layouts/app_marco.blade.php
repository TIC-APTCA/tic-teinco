@include('layouts.head')

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	
	@include('layouts.header')

	<div class="app-body">
		<div class="sidebar">
			<nav class="sidebar-nav">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="home"> 
							<i class="nav-icon icon-speedometer"></i> Escritorio 
							<span class="badge badge-primary">Nuevo</span>
						</a>
					</li>
					<li class="nav-title">MODULOS</li>
					<li class="nav-item nav-dropdown">
						<a class="nav-link nav-dropdown-toggle" href="#"> 
							<i class="nav-icon fa fa-archive"></i> Archivos
						</a>
						<ul class="nav-dropdown-items">
							<li class="nav-item">
								<a class="nav-link" href="#"> 
									<i class="nav-icon"></i> Trabajadores
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> 
									<i class="nav-icon"></i> Gestiones
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ route('inventarios.inicio') }}"> 
									<i class="nav-icon"></i> Inventario TIC
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> 
									<i class="nav-icon"></i> Asig. / Ded. - Equipos
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item nav-dropdown">
						<a class="nav-link nav-dropdown-toggle" href="#"> 
							<i class="nav-icon fa fa-laptop"></i> Soporte Tec. y Serv.
						</a>
						<ul class="nav-dropdown-items">
							<li class="nav-item">
								<a class="nav-link" href="#"> 
									<i class="nav-icon"></i> Solicitudes
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item nav-dropdown">
						<a class="nav-link nav-dropdown-toggle" href="#"> 
							<i class="nav-icon fa fa-folder"></i> Procedimientos
						</a>
						<ul class="nav-dropdown-items">
							<li class="nav-item">
								<a class="nav-link" href="#"> 
									<i class="nav-icon"></i> Vales
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> 
									<i class="nav-icon"></i> Requisiciones
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"> 
									<i class="nav-icon"></i> Ordenes de Serv.
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item nav-dropdown">
						<a class="nav-link nav-dropdown-toggle" href="#"> 
							<i class="nav-icon fa fa-pie-chart"></i> Reportes
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> 
							<i class="nav-icon fa fa-gears"></i> Configuracion 
						</a>
					</li>
					<li class="nav-item nav-dropdown">
						<a class="nav-link nav-dropdown-toggle" href="#"> 
							<i class="nav-icon fa fa-question-circle"></i> Ayuda
						</a>
					</li>

					<li class="divider"></li>

					<li class="nav-title">Extras</li>
					<li class="nav-item mt-auto">
						<a class="nav-link nav-link-success" href="#" target="_top"> 
							<i class="nav-icon icon-cloud-download"></i>
							Download CoreUI
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-link-danger" href="#" target="_top"> 
							<i class="nav-icon icon-layers"></i> Try CoreUI <strong>PRO</strong>
						</a>
					</li>
				</ul>
			</nav>
			<button class="sidebar-minimizer brand-minimizer" type="button"></button>
		</div>
		
		<!-- Breadcrumb - Routes -->
		<main class="main"> 

		@yield('content')
		
		</main>
		
	</div>
	@include('layouts.footer')
</body>