<div class="card" style="width: 60rem;">
  <div class="card-body">

    <h5 class="d-flex justify-content-center">Adicionar Curso</h5>

    <form>
      <div class="form-group">
        <div class="row mp-n5">
    <label >Titulo</label> 
     <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
     </div>

     <div class="row">
     <label >Descrição</label>
     <input type="text" name="descricao" value="{{isset($registro->vagas) ? $registro->descricao : ''}}">
     </div>

     <div class="row">
     <label>Vagas</label>
     <input type="text" name="vagas" value="{{isset($registro->vagas) ? $registro->vagas : ''}}">
     </div>
  </div>
</form>

<button type="button" class="btn btn-success">Salvar</button>

</div>
