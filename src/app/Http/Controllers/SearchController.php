<?php

namespace App\Http\Controllers;

use App\Enums\DocumentType;
use App\Services\PortalTransparenciaService;
use Illuminate\Http\Request;
use App\Services\CnpjApiService;

class SearchController extends Controller
{
    protected $cnpjApiService;

    public function __construct(CnpjApiService $cnpjApiService, PortalTransparenciaService $portalTransparenciaService)
    {
        $this->cnpjApiService = $cnpjApiService;
        $this->portalTransparenciaService = $portalTransparenciaService;

    }

    public function search(Request $request)
    {
        $search_term = $this->sanitizeSearchTerm($request->input('search-term'));
        $api_type = $request->input('type');

        if ($api_type == 'CNPJ') {
            $results = $this->cnpjApiService->getCnpjData($search_term);
            return view('results', [
                'results' => $results,
                'type' => 'getCnpjData',
                'origin' => $this->cnpjApiService->baseUrl
            ]);
        }elseif ($api_type == DocumentType::CPF){
            $results = $this->portalTransparenciaService->getAuxilioEmergencialData($search_term);
            return view('results', [
                'results' => $results,
                'type' => 'getAuxilioEmergencialData',
                'origin' => $this->cnpjApiService->baseUrl
            ]);
        }
        return redirect()->back()->with('error', 'Invalid document type');
    }

    private function sanitizeSearchTerm($term)
    {
        $term = preg_replace('/[^A-Za-z0-9]/', '', $term);
        return trim($term);
    }
}
