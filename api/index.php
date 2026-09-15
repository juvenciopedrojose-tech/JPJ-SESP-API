<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

echo json_encode(
    [
        'sucesso' => true,
        'api' => 'JPJ - SESP API',
        'nome_sistema' => 'JPJ - SESP',
        'versao' => '1.0.0',
        'estado' => 'online',
        'ambiente' => 'producao',
        'mensagem' => 'API JPJ - SESP operacional.'
    ],
    JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
);
