	@include('_includes.master')

	@section('conteudo')
	<div class="container">
		
		<br>
		<br>
		<div class="card" style="width: 70rem;">
        	<div class="card-body">
            <h5 class="d-flex justify-content-center">Listar Cursos</h5>

            <table class="table table-bordered table-dark text-center">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Titulo</th>
						<th scope="col">Descrição</th>
						<th scope="col">Vagas</th>
						<th scope="col">Acao</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
					<tr>

						<td>{{ $registro->id}} </td>
						<td>{{ $registro->titulo}} </td>
						<td>{{ $registro->descricao}} </td>
						<td>{{ $registro->vagas}} </td>
					<!--<td><img width="120px" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"> 
						</td>
						#RESPONSAVEL POR BUSCAR A IMAGEM NO BANCO
						-->
						
						<td>
							<a class="btn btn-info" href="{{ route('cursos.editar',$registro->id)}}">Editar</a>
							<a class="btn btn-danger" href="{{ route('cursos.deletar',$registro->id)}}">Deletar</a>

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
    </div>
</div>
	



