@extends('layouts.app_marco')

@section('content')

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
	<li class="breadcrumb-item"><a href="{{ route('archivos.home') }}">Archivos</a></li>
	<li class="breadcrumb-item active">Inventario TIC</li>
</ol>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">

                <div class="row">

                	<!-- Busquedas -->
                	<div class="col-md-6">
                		<form action="{{ route('inventarios.inicio') }}" method="get">
	            		<div class="form-group">
	                      <div class="input-group">
	                        <input type="text" id="input2-group2" name="input2-group2" class="form-control" placeholder="Search">
	                        <span class="input-group-append">
	                        	<button type="submit" class="btn btn-primary">
	                        		<i class="fa fa-search"></i> Buscar
	                        	</button>
	                        </span>
	                      </div>
						</div>
						</form>
					</div>

					<!-- Paginacion -->
					<div class="col-md-5">
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-end">
			                    <li class="page-item">
			                      <a class="page-link" href="#" aria-label="Previous">
			                        <span aria-hidden="true">&laquo;</span>
			                        <span class="sr-only">Previous</span>
			                      </a>
			                    </li>
			                    <li class="page-item">
			                      <a class="page-link" href="#">1</a>
			                    </li>
			                    <li class="page-item">
			                      <a class="page-link" href="#">2</a>
			                    </li>
			                    <li class="page-item">
			                      <a class="page-link" href="#">3</a>
			                    </li>
			                    <li class="page-item">
			                      <a class="page-link" href="#" aria-label="Next">
			                        <span aria-hidden="true">&raquo;</span>
			                        <span class="sr-only">Next</span>
			                      </a>
			                    </li>
			                  </ul>
			            </nav>
					</div>

					<div class="col-md-1">
						<div class="float-right">
							<a href="#" class="btn btn-success" >Nuevo</a>
						</div>
					</div>
					
				</div>
				<!--row-->

				<div class="card">
					<div class="card-header">
						<i class="fa fa-align-justify"></i> Listado de Equipos
						<div class="card-header-actions">
		                    <small class="text-muted">Cant. Filas </small>
		                    <span class="badge badge-danger badge-pill">14</span>
		                </div>
					</div>

					<div class="">
						<div class="list-group">
							<a href="#" class="list-group-item list-group-item-action">
								<div class="row">
									<div class="col-md-2">Dapibus ac facilisis in</div>
									<div class="col-md-4">Morbi leo risus</div>
									<div class="col-md-4">Porta ac consectetur ac</div>
								</div>
							</a>
							<a href="#" class="list-group-item list-group-item-action">
								<div class="row">
									<div class="col-md-2">Dapibus ac facilisis in</div>
									<div class="col-md-4">Morbi leo risus</div>
									<div class="col-md-4">Porta ac consectetur ac</div>
								</div>
							</a>
						</div>
					</div>

				</div>
				<!--card-->
                
            </div>
            <!--panel panel-default-->
            
        </div>
    </div>
</div>
@endsection