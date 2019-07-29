	<!DOCTYPE html>
	<html>
	<head>
       <title>Controle de Estoque</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
	   
	      <header>
	    <div class="container-fluid">
	    	<div class="row">
	    		<div class="col-sm-10">
	   	   <ul class="nav justify-content-end">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Inicio</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" 
			    href="{{route('cursos')}}">Buscar</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" 
			    href="{{route('cursos.adicionar')}}">Adicionar Curso</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="{{route('login.sair')}}">Sair</a>
			  </li>
			</ul>
	</div>
		</div>
		</div>
		</header>
		

		@yield('conteudo')


	</body>
	</html>
