<?php

namespace App\Http\Controllers;

use App\Enums\DocumentType;
use Illuminate\Http\Request;

class DocumentTypeController extends Controller
{
    public function index()
    {
        $types = [];
        foreach (DocumentType::cases() as $type) {
            $types[] = ['value' => $type->value, 'name' => $type->name];
        }
        return response()->json($types);
    }
}
