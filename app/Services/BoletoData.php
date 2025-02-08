<?php 

namespace App\Services;

use Carbon\Carbon;

class BoletoData {
    public static function data ($id, $nome, $email, $cpf, $ddd, $telefone, $amount){
    $data_boleto = Carbon::now(timezone_open('America/Sao_Paulo'))->addMonths(2)->format('Y-m-d');
    
    $data =  [
            "reference_id" => $id,
            "customer" => [
                "name" => $nome,
                "email" => $email,
                "tax_id" => $cpf,
                "phones" => [
                    [
                        "country" => "55",
                        "area" => $ddd,
                        "number" => $telefone,
                        "type" => "MOBILE"
                    ]
                ]
            ],
            "items" => [
                [
                    "reference_id" => "referencia do item",
                    "name" => "nome do item",
                    "quantity" => 1,
                    "unit_amount" => $amount
                ]
            ],
            "notification_urls" => [
                "https://meusite.com/notificacoes"
            ],
            "charges" => [
                [
                    "reference_id" => $id,
                    "description" => "Cobrança relacinada a inscrição em concurso publico",
                    "amount" => [
                        "value" => $amount,
                        "currency" => "BRL"
                    ],
                    "payment_method" => [
                        "type" => "BOLETO",
                        "boleto" => [
                            "due_date" => $data_boleto,
                            "instruction_lines" => [
                                "line_1" => "Pagamento processado para Admin Tech",
                                "line_2" => "Via PagSeguro"
                            ],
                            "holder" => [
                                "name" => "Admin Tec",
                                "tax_id" => "45.092.047/0001-60",
                                "email" => "mottamediamanagement@gmail.com",
                                "address" => [
                                    "country" => "Brasil",
                                    "region" => "São Paulo",
                                    "region_code" => "SP",
                                    "city" => "Sao Paulo",
                                    "postal_code" => "01452002",
                                    "street" => "Jardim Capelinha",
                                    "number" => "1384",
                                    "locality" => "Rua Guilherme Jerônimo Klosternecht"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
        $gerar = new BoletoService();
        return $gerar->gerarBoleto($data);
    }
}