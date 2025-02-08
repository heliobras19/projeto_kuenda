<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PagarMe\Client;

class PaymentController extends Controller
{
        private $pagarMe;

    public function __construct()
    {
        $this->pagarMe = new Client(env('PAGARME_API_KEY'));
    }

    public function generateBoleto(Request $request)
    {
        // Validação dos dados da requisição
        $request->validate([
            'amount' => 'required|integer|min:100', // Valor mínimo R$ 1,00 (em centavos)
            'customer.name' => 'required|string',
            'customer.cpf' => 'required|string',
            'customer.email' => 'required|email',
            'customer.phone' => 'required|string',
            'customer.state' => 'required|string',
            'customer.city' => 'required|string',
            'customer.neighborhood' => 'required|string',
            'customer.street' => 'required|string',
            'customer.street_number' => 'required|string',
            'customer.zipcode' => 'required|string',
        ]);

        // Dados do cliente recebidos na requisição
        $data = $request->all();

        try {
            // Criando a transação no Pagar.me
            $transaction = $this->pagarMe->transactions()->create([
                'amount' => $data['amount'],
                'payment_method' => 'boleto',
                'customer' => [
                    'external_id' => uniqid(), // ID único para o cliente
                    'name' => $data['customer']['name'],
                    'type' => 'individual',
                    'country' => 'br',
                    'documents' => [
                        [
                            'type' => 'cpf',
                            'number' => $data['customer']['cpf']
                        ]
                    ],
                    'email' => $data['customer']['email'],
                    'phone_numbers' => [$data['customer']['phone']],
                ],
                'billing' => [
                    'name' => $data['customer']['name'],
                    'address' => [
                        'country' => 'br',
                        'state' => $data['customer']['state'],
                        'city' => $data['customer']['city'],
                        'neighborhood' => $data['customer']['neighborhood'],
                        'street' => $data['customer']['street'],
                        'street_number' => $data['customer']['street_number'],
                        'zipcode' => $data['customer']['zipcode']
                    ]
                ],
            ]);

            // Retornando a URL e o código de barras do boleto
            return response()->json([
                'status' => 'success',
                'boleto_url' => $transaction['boleto_url'],
                'boleto_barcode' => $transaction['boleto_barcode'],
                'transaction_id' => $transaction['id']
            ]);
        } catch (\Exception $e) {
            // Tratamento de erros
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
