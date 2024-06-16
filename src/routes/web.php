<?php

use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\SearchController;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/sobre', function () {
        return view('about');
    });

    Route::get('/contato', function () {
        return view('contact');
    });

    Route::get('/document-types', [DocumentTypeController::class, 'index']);
    Route::match(['get', 'post'], '/search', [SearchController::class, 'search'])->name('search');
});

Route::post('/send-message', function () {
    request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    $details = [
        'name' => request('name'),
        'email' => request('email'),
        'message' => request('message'),
    ];

    Mail::to('augustosumac@gmail.com')->send(new ContactMessage($details));

    return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
});
