<?php

namespace App\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class CnpjApiService
{
    public $baseUrl = 'https://receitaws.com.br/v1/cnpj/';

    /**
     * @throws ConnectionException
     */
    public function getCnpjData($cnpj)
    {
        $response = Http::accept('application/json')->get($this->baseUrl . $cnpj);
        if ($response->successful()) {
            return $response->json();
        }
        return null;
    }
}
