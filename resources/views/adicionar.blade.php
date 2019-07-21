	@include('_includes.master')

	@section('conteudo')
	
	<div class="container d-flex justify-content-center" style="padding:70px">
	
				<form class="" action="{{route('cursos.salvar')}}" method="POST">
					{{ csrf_field() }}

						@include('_includes.form')

				    <div class="botao" style="padding:20px">
      					<button  class="btn btn-success">Salvar</button>
   				    </div>
				</form>
				
				</div>
	




			
	



