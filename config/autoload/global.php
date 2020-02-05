<?php
return [
    'zf-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'adapters' => [],
    ],
    'zfr_cors' => [
        // Insira aqui os domínios que poderão fazer requisições à API e os métodos que poderão ser utilizados
        'allowed_origins' => ['*'],
        'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE', 'OPTIONS'],
        // Insira os cabeçalhos permitidos nas requisições conforme abaixo
        'allowed_headers' => ['Authorization', 'Content-Type', 'Access-Control-Allow-Origin'],
        // Outras configurações
        'max_age' => 120,
        'exposed_headers' => [],
        'allowed_credentials' => false,
    ],
];
