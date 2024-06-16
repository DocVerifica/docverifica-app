<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PortalTransparenciaService
{
    private $baseUrl = 'https://api.portaldatransparencia.gov.br/api-de-dados/';
    private $apiKey;

    public function __construct()
    {
        $this->apiKey = env('API_PORTAL_TRANSPARENCIA_KEY');
    }

    public function getAuxilioEmergencialData($codigoBeneficiario)
    {
        $response = Http::withHeaders([
            'chave-api-dados' => $this->apiKey
        ])->get($this->baseUrl . 'auxilio-emergencial-por-cpf-ou-nis', [
            'codigoBeneficiario' => $codigoBeneficiario,
            'pagina' => 1
        ]);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
