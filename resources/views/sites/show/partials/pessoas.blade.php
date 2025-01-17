<div>
  <b>Responsável:</b> {{ $site->owner }}
  - {{ $site->ownerName }}
  - {{ $site->ownerEmail }}
  @includeWhen(Gate::check('sites.update', $site), 'sites.partials.changeowner-btn')
</div>

@if ($site->config['manager'] == 'aegir')
  <div>
    <b>Administradores:</b>

    @can('sites.update', $site)
      <a href="sites/{{ $site->id }}/novoadmin" title="Adicionar administrador" class="btn btn-sm text-primary">
        <i class="fas fa-user-plus"></i>
      </a>
    @endcan

    @foreach (explode(',', $site->numeros_usp) as $numero_usp)
      @include('sites.partials.list-administrador')
    @endforeach
  </div>
@endif
