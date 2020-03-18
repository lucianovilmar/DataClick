@extends("tarefa.container")
@section("content")

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Prioridade</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descricao</th>
      <th> </th>
    </tr>
  </thead>
  <tbody>
  	@foreach($lista as $tarefa)
    <tr>
      <th scope="row">{{$tarefa->prioridade}}</th>
      <td>{{$tarefa->titulo}}</td>
      <td>{{$tarefa->descricao}}</td>
      <td>
      	<a href="{{route("tarefa.edicao",$tarefa->id)}}" class="btn btn-primary">editar</a>
      	<button class="btn btn-danger deletar-tarefa"  data-id="{{$tarefa->id}}">excluir</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalLongoExemplo">Aviso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id="excluir-tarefa" class="btn btn-primary">Excluir</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(window).on("load", function(){
    $(".deletar-tarefa").on("click", function(){
      $(".modal-body").html("Deseja realmente excluir a tarefa?");
     var id = $(this).data("id");
      $("#excluir-tarefa").off();
      $("#excluir-tarefa").on("click", function(){
        window.location.href = "{{route("tarefa.delete")}}?id="+id;
      });
     console.log(id);
     $(".modal").modal("show");
    });
  });
</script>

@endsection