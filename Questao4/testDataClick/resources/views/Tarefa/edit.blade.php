@extends("tarefa.container")
@section("content")

<form method="post" action="{{route("tarefa.update", $tarefa->id)}}">
  @csrf()
  <input name="_method" type="hidden" value="PUT">
  <div class="form-group">
    <label >Titulo</label>
    <input type="text" class="form-control" name="titulo" value="{{$tarefa->titulo}}">
  </div>
  <div class="form-group">
    <label >Descrição</label>
    <textarea class="form-control" name="descricao" rows="3">{{$tarefa->descricao}}</textarea>
  </div>

  <div class="form-group">
    <label >Prioridade</label>
    <select class="form-control" name="prioridade">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Gravar</button>
  <a href="{{ route("tarefa.index") }}" class="btn btn-secondary">Voltar</a>

</form>
<script type="text/javascript">
	$(window).on("load",function(){
		var value = "{{$tarefa->prioridade}}";
		console.log(value);
		$("select[name=prioridade]").val(value);
	});
</script>

@endsection