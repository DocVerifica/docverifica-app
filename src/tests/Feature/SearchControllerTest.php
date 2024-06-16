<?php

namespace Tests\Feature;

use App\Enums\DocumentType;
use App\Http\Controllers\SearchController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the search function for CNPJ by company name.
     *
     * @return void
     */
    public function testSearchCnpjByCompanyName()
    {
        $cnpj = '52162655000160';

        $response = $this->get('/');
        $token = $response->getCookie('XSRF-TOKEN');

        $response = $this->post('search', [
            'search-term' => $cnpj,
            'type' => DocumentType::CNPJ->value,
            '_token' => $token
        ]);

        $response->assertStatus(200);

    }
}
