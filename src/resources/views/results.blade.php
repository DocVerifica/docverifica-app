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
                <div
                    class="col-md-12 text-center d-flex flex-column justify-content-center position-relative search-box">
                    <h1 class="text-white mb-3" style="font-size: 42px;"><i class="bi bi-search"></i> docverifica.com.br
                    </h1>
                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <select class="form-select" id="type" name="type" style="flex: 1 1 auto;"></select>
                            <input type="text" class="form-control p-3" id="search-term" name="search-term"
                                   placeholder="Digite o termo desejado para sua pesquisa"
                                   style="flex: 3 1 auto;">
                            <button type="submit" class="btn btn-warning" id="btn-search" name="btn-search"
                                    style="flex: 1 1 auto;">
                                <i class="bi bi-search"></i> Pesquisar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <h4>Fonte da consulta</h4>
                <hr>
                <p>Origem dos dados:<br>
                    <a href="{{ $origin }}" target="_blank">{{ $origin }}</a></p>
            </div>
            <div class="col-8">
                <h4>Resultados da pesquisa</h4>
                <hr>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if(isset($results) && !empty($results))
                    @if($type == "getCnpjData")
                        @include('partials.results.cnpj')
                    @elseif($type == "getAuxilioEmergencialData")
                        @include('partials.results.auxilio-emergencial')
                    @endif
                @else
                    <p>Nenhum resultado encontrado.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $.ajax({
            url: '/document-types',
            type: 'GET',
            success: function (data) {
                const select = $('#type');
                data.forEach(type => {
                    const option = $('<option></option>').attr('value', type.name).text(type.value);
                    select.append(option);
                });
            }
        });
    });
</script>
