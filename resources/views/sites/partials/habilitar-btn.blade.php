<form method="POST" action="sites/{{ $site->id }}/enable">
  @csrf
  <button type="submit" class="btn btn-success">Habilitar</button>
</form>