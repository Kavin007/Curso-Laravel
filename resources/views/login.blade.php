<!DOCTYPE html>
	<html>
	<head>
       <title>Controle de Estoque</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>

<div class="container d-flex justify-content-center" style="padding: 220px">
 <div class="card" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Login</h5>
    <form class="" action="{{route('login.entrar')}}" method="post">
					{{ csrf_field() }}
         <div class="form-group">
             <input type="text" class="form-control" name="email" placeholder="Email">
         </div>

        <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Senha">
        </div>
        <div class="botao" style="padding:20px">
      	<button  class="btn btn-primary">Entrar</button>
   	 </div>
    </form>

    <a class="nav-link" 
			    href="{{route('cursos.adicionar')}}">Adicionar Curso</a>

    
</div>
</div>
</div>

    </body>
    </html>