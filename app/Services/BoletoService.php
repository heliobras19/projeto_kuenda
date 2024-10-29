<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

use function Symfony\Component\HttpKernel\Profiler\getToken;

class BoletoService {
    public function getToken() {
        $response = Http::asForm()->withBasicAuth(env('BB_CLIENT_ID'), env('BB_CLIENT_SECRET'))
        ->post('https://oauth.bb.com.br/oauth/token', [
            'grant_type' => 'client_credentials',
            'scope' => 'cobranca.registro-boletos',
        ]);
        $token = $response->json();
        return $token;
    }

    public function gerarBoleto() {
        $token = $this->getToken();
        dd($token);
        $response = Http::withToken($token)->post('https://api.bb.com.br/cobrancas/v2/boletos', [
            'numeroConvenio' => '123456',
            'numeroCarteira' => '17',
            'numeroVariacaoCarteira' => '35',
            'codigoModalidade' => '1',
            'dataEmissao' => '2023-12-01',
            'dataVencimento' => '2023-12-10',
            'valorOriginal' => '100.00',
            'pagador' => [
                'tipoInscricao' => 1,
                'numeroInscricao' => '12345678909',
                'nome' => 'Cliente Exemplo',
                'endereco' => [
                    'cep' => '70040900',
                    'logradouro' => 'SBS Qd 1 Bloco G',
                    'bairro' => 'Asa Sul',
                    'cidade' => 'Brasília',
                    'uf' => 'DF',
                ],
            ],
            'beneficiario' => [
                'cpfCnpj' => '98765432100',
                'agencia' => '1234',
                'contaCorrente' => '567890',
                'nome' => 'Empresa Exemplo',
            ],
        ]);

        return $response->json();
    }
}