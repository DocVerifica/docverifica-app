@extends('layouts.app')

@section('title', 'Consulta gratuita de informações e documentos')

@section('content')
    <section class="bg-image position-relative">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-12 text-center d-flex flex-column justify-content-center position-relative search-box">
                    <h1 class="text-white" style="font-size: 64px;"><i class="bi bi-search"></i> docverifica.com.br</h1>
                    <h4 class="text-white"> Pesquise rapidamente dados públicos como:</h4>
                    <h1 class="mb-4 text-white"><span style=" padding-top: -5px; color: #dfa33b;">Empresas, Documentos, Benefícios do governo, <br> Licitações, Veículos e muito mais ...</span>
                    </h1>
                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <select class="form-select" id="type" name="type" style="flex: 1 1 auto;"></select>
                            <input type="text" class="form-control p-3" id="search-term" name="search-term"
                                   placeholder="Digite o termo desejado para sua pesquisa"
                                   style="flex: 2 1 auto;">
                            <button type="submit" class="btn btn-warning" id="btn-search" name="btn-search"
                                    style="flex: 1 1 auto;">
                                <i class="bi bi-search"></i> Pesquisar
                            </button>
                        </div>
                    </form>
                    <h3 class="mt-1 text-white"> Acesse informações confiáveis em segundos, fornecemos a origem dos
                        dados e
                        totalmente gratuito!</h3>
                    <p class="text-white"><small>*Em breve consultas de dados da receita federal, despesas políticas,
                            licitações, gastos públicos e muito mais.</small></p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light border-light">
        <div class="container">
            <div class="row p-5">
                <div class="col-md-12 text-center py-5">
                    <h2>Dados Públicos e Código Open Source</h2>
                    <p>Você seleciona o tipo de consulta, coloca o termo desejado e nosso hub verifica em diversas API's
                        públicas, centraliza toda informação e disponibiliza para você.</p>
                    <p style="margin-top: -15px;">Nosso serviço utiliza dados públicos e oficiais do governo, garantindo
                        precisão e confiabilidade. O
                        código do nosso hub de APIs de consulta é open source, proporcionando transparência e segurança.
                        Confira nosso repositório no <a href="#">GitHub</a>.</p>
                    <p class="mt-5">Fonte de informação:</p>
                    <p>
                        <img src="{{ url('/logos/governo-federal.png') }}" width="100" class="img-thumbnail" alt="">
                        <img src="{{ url('/logos/receita-federal.jpeg') }}" width="100" class="img-thumbnail" alt="">
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-shield-check"></i>
                        <h5 class="card-title mt-3">Segurança</h5>
                        <p class="card-text">Consulte seus documentos com segurança e privacidade.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-clock-history"></i>
                        <h5 class="card-title mt-3">Rápido</h5>
                        <p class="card-text">Processo eficiente para obter informações em poucos segundos.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-currency-exchange"></i>
                        <h5 class="card-title mt-3">Gratuito</h5>
                        <p class="card-text">Aproveite todos os recursos e benefícios gratuitamente.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-github"></i>
                        <h5 class="card-title mt-3">Open-Source</h5>
                        <p class="card-text">Acesse o link e confira nosso repositório.</p>
                    </div>
                </div>
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
