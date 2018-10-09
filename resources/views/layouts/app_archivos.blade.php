@include('layouts.head')

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	
	@include('layouts.header')

	<div class="app-body">
		<div class="sidebar">
			<nav class="sidebar-nav">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home') }}"> 
							<i class="nav-icon icon-speedometer"></i> Escritorio 
							<span class="badge badge-primary">Nuevo</span>
						</a>
					</li>
					<li class="nav-title">ARCHIVOS</li>
					<li class="nav-item nav-dropdown">
						<a class="nav-link" href="#"> 
							<i class="nav-icon icon-user"></i> Trabajadores
						</a>
					</li>
					<li class="nav-item nav-dropdown">
						<a class="nav-link" href="{{ route('zafras.inicio') }}"> 
							<i class="nav-icon fa fa-truck"></i> Gestiones
						</a>
					</li>
					<li class="nav-item nav-dropdown">
						<a class="nav-link" href="#"> 
							<i class="nav-icon fa fa-flask"></i> Inventario TIC
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> 
							<i class="nav-icon fa fa-globe"></i> Asig. / Dev. Equipos
						</a>
					</li>

					<li class="divider"></li>

					
				</ul>
			</nav>
			<button class="sidebar-minimizer brand-minimizer" type="button"></button>
		</div>
		
		<!-- Breadcrumb - Routes -->
		<main class="main"> 
		
		@yield('content')
		
		</main>
		
	</div>
	
	<footer class="app-footer">
		<div>
			<a href="https://coreui.io">CoreUI</a> <span>&copy; 2018 creativeLabs.</span>
		</div>
		<div class="ml-auto">
			<span>Powered by</span> <a href="https://coreui.io">CoreUI</a>
		</div>
	</footer>
	
	<!-- Bootstrap and necessary plugins-->
	<script src="{{ asset('admin_coreui/dist/vendors/jquery/js/jquery.min.js') }}"></script>
	<script src="{{ asset('admin_coreui/dist/vendors/popper.js/js/popper.min.js') }}"></script>
	<script src="{{ asset('admin_coreui/dist/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin_coreui/dist/vendors/pace-progress/js/pace.min.js') }}"></script>
	<script src="{{ asset('admin_coreui/dist/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('admin_coreui/dist/vendors/@coreui/coreui/js/coreui.min.js') }}"></script>
	<!-- Plugins and scripts required by this view-->
	<script src="{{ asset('admin_coreui/dist/vendors/chart.js/js/Chart.min.js') }}"></script>
	<script src="{{ asset('admin_coreui/dist/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js') }}"></script>
	<script src="{{ asset('admin_coreui/dist/js/main.js') }}"></script>
</body>
</html>