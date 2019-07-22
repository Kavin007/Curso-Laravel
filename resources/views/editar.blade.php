	@include('_includes.master')

	@section('conteudo')
	
	<div class="container d-flex justify-content-center" style="padding:70px">
	<h5 class="d-flex justify-content-center">Atualizar Curso</h5>
	
				<form class="" action="{{route('cursos.atualizar',$registro->id)}}" method="post">
					
					 <input type="hidden" name="_method" value="put">
					{{ csrf_field() }}

						@include('_includes.form')

				    <div class="botao" style="padding:20px">
      					<button  class="btn btn-success">Atualizar</button>
   				    </div>
				</form>
				
				</div>
	




			
	



