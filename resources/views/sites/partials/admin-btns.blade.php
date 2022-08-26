@if ($site->status == 'Solicitado')
  @include('sites.partials.aprovar-btn')
  &nbsp;
  @include('sites.partials.delete-btn')
@elseif ($site->status == 'Aprovado - Habilitado')
  @include('sites.partials.desabilitar-btn')
@elseif ($site->status == 'Aprovado - Desabilitado')
  @include('sites.partials.habilitar-btn')
  &nbsp;
  @include('sites.partials.delete-btn')
@elseif ($site->status == 'Aprovado - Em Processamento')
  @include('sites.partials.voltar-btn')
@endif