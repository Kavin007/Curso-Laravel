	@include('_includes.master')

	@section('conteudo')
	
	<div class="container d-flex justify-content-center" style="padding:70px">
	
				<form class="" action="{{route('cursos.adicionar')}}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@include('_includes.form')
				</form>
				</div>
	




			
	



