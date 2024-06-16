@extends('layouts.app')

@section('title', 'Consulta gratuita de informações e documentos')

@section('content')
    <style>
        .bg-image {
            background-image: url('https://www.chetu.com/img/custom-api-development-services/custom-api-development-services-banner.jpg');
            background-position: left center;
            height: 300px;
        }
    </style>
    <section class="bg-image position-relative">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-12 text-center d-flex flex-column justify-content-center position-relative">
                    <h1 class="text-white title-box" style="font-size: 48px;">Contato</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <h2>Fale Conosco</h2>
            <p>Se você tiver alguma dúvida, sugestão ou precisar de suporte, entre em contato conosco através do
                formulário abaixo.</p>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="/send-message" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-warning">Enviar</button>
            </form>
        </div>
    </section>
@endsection
