<h1>Administrador de Conteúdo adicionado ao site</h1>

<div>
  O site {{ $site->dominio . config('sites.dnszone') }} teve um administrador de contéudo adicionado.<br>
  @include('emails.partials.tutoriais')
</div>
<br>
<div>
  <b>Responsável pelo site:</b> {{ $nusp }} - {{ $name }}
</div>
<br>
<div>
  <b>Administrador de Conteúdo adicionado:</b> {{ $nusp_novo_admin }} - {{ $name_novo_admin }}
</div>
<br>
Mensagem automática do sistema de gestão de sites: {{ config('app.url') }}
