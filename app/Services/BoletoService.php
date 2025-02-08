<?php

namespace App\Services;

use GuzzleHttp\Client;
class BoletoService {

    public function gerarBoleto($dados) {
        $token = env('PAG_SEGURO_API');
        $http = new Client();
        $id = uniqid();
        //$send = BoletoData::data($id, $dados->nome, $dados->email, $dados->cpf, $dados->ddd, $dados->telefone, $dados->amount);
        $response = $http->request('POST', 'https://sandbox.api.pagseguro.com/orders', [
            'body' => json_encode($dados),
            'headers' => [
                'Authorization' => 'Bearer '. $token,
                'accept' => '*/*',
                'content-type' => 'application/json',
            ],
        ]);
    }
}