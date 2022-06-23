@extends('master')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('javascripts_bottom')
  @parent
  <script>CKEDITOR.replace( 'justificativa' );</script>
@stop

@section('content')
@parent

<form method="POST" action="sites/{{ $site->id }}">
{{ csrf_field() }}
{{ method_field('patch') }}

  <div class="form-group">
    <label for="justificativa">Justificativa:</label>
    <textarea class="form-control" id="justificativa" rows="5" name="justificativa">{{ $site->justificativa }}</textarea>
  </div>
 
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <select class="form-control" id="categoria" name="categoria">
      <option selected>{{$site->categoria}}</option>
      <option>Grupo de estudo</option>
      <option>Grupo de pesquisa</option>
      <option>Departamento</option>
      <option>Administrativo</option>
      <option>Centro</option>
      <option>Associação</option>
      <option>Laboratório</option>
      <option>Comissão</option>
      <option>Evento</option>
      <option>Programa de Pós-Graduação</option>
    </select>
  </div>
<br>
<button type="submit" class="btn btn-primary"> Enviar </button>
</form>

@stop
