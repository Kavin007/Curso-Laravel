<div class="card" style="width: 50rem;">
  <div class="card-body">

    <h5 class="d-flex justify-content-center">Adicionar Curso</h5>

    
      <div class="form-group">
        <input type="text" class="form-control" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}" placeholder="Titulo">
      </div>

     <div class="form-group">
       <input type="text" class="form-control" name="descricao" value="{{isset($registro->vagas) ? $registro->descricao : ''}}" placeholder="Descrição">
     </div>

     
     <div class="form-group">
       <input type="text" class="form-control" name="vagas" value="{{isset($registro->vagas) ? $registro->vagas : ''}}" placeholder="Vagas">
     </div>
  </div>
 



