<?php

return [
    'dnszone' => env('DNSZONE', false),
    'unidades_usp' => env('UNIDADES_USP',false),
    'deploy_secret_key' => env('DEPLOY_SECRET_KEY', false),
    'subdominio' => env('HABILITAR_SUBDOMINIO', false),
    'admins' => env('ADMINS'),
    'siteManager' => env('SITE_MANAGER', 'aegir'),
];
