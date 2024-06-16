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
                    <h1 class="text-white title-box" style="font-size: 48px;">Sobre o DocVerifica</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="height: 520px;">
        <div class="container">
            <h2>Nosso Projeto</h2>
            <p>O DocVerifica é uma plataforma que permite a consulta rápida e gratuita de informações e documentos
                públicos. Nossa missão é fornecer acesso fácil e seguro a dados de diversas fontes públicas,
                centralizando todas as informações em um único lugar. Utilizamos APIs públicas para buscar e
                disponibilizar os dados, garantindo precisão e confiabilidade.</p>
            <p>Nosso código é open-source, o que proporciona transparência e segurança. Você pode conferir nosso
                repositório no <a href="#">GitHub</a>.</p>
            <h3>Benefícios</h3>
            <ul>
                <li>Gratuito</li>
                <li>Rápido</li>
                <li>Seguro</li>
                <li>Open-Source</li>
            </ul>
        </div>
    </section>
@endsection
