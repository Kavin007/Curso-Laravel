	@include('_includes.master')

	@section('conteudo')
	<div class="container">
		<div class="row">
			<form class="" action="{{route('cursos.adicionar')}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
					@include('_includes.form')
			</form>
		</div>
		</div>
	



