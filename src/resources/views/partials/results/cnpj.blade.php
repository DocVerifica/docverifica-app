@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if(isset($results) && !empty($results))
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>CNPJ</td>
            <td>{{ $results['cnpj'] }}</td>
        </tr>
        <tr>
            <td>Nome da Empresa</td>
            <td>{{ $results['nome'] }}</td>
        </tr>
        <tr>
            <td>Situação</td>
            <td>{{ $results['situacao'] }}</td>
        </tr>
        <tr>
            <td>Data de Abertura</td>
            <td>{{ $results['abertura'] }}</td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td>{{ $results['tipo'] }}</td>
        </tr>
        <tr>
            <td>Porte</td>
            <td>{{ $results['porte'] }}</td>
        </tr>
        <tr>
            <td>Natureza Jurídica</td>
            <td>{{ $results['natureza_juridica'] }}</td>
        </tr>
        <tr>
            <td>Atividade Principal</td>
            <td>{{ $results['atividade_principal'][0]['text'] }}</td>
        </tr>
        <tr>
            <td>Atividades Secundárias</td>
            <td>
                @foreach ($results['atividades_secundarias'] as $activity)
                    {{ $activity['text'] }}<br>
                @endforeach
            </td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td>{{ $results['logradouro'] }}, {{ $results['numero'] }}, {{ $results['bairro'] }}
                , {{ $results['municipio'] }}, {{ $results['uf'] }}, {{ $results['cep'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $results['email'] }}</td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td>{{ $results['telefone'] }}</td>
        </tr>
        <tr>
            <td>Última Atualização</td>
            <td>{{ $results['ultima_atualizacao'] }}</td>
        </tr>
        <tr>
            <td>Nome Fantasia</td>
            <td>{{ $results['fantasia'] }}</td>
        </tr>
        <tr>
            <td>Complemento</td>
            <td>{{ $results['complemento'] }}</td>
        </tr>
        <tr>
            <td>EFR</td>
            <td>{{ $results['efr'] }}</td>
        </tr>
        <tr>
            <td>Motivo da Situação</td>
            <td>{{ $results['motivo_situacao'] }}</td>
        </tr>
        <tr>
            <td>Situação Especial</td>
            <td>{{ $results['situacao_especial'] }}</td>
        </tr>
        <tr>
            <td>Data da Situação Especial</td>
            <td>{{ $results['data_situacao_especial'] }}</td>
        </tr>
        <tr>
            <td>Capital Social</td>
            <td>{{ $results['capital_social'] }}</td>
        </tr>
        <tr>
            <td>QSA</td>
            <td>
                @foreach ($results['qsa'] as $qsa)
                    {{ $qsa['nome'] }} - {{ $qsa['qual'] }}<br>
                @endforeach
            </td>
        </tr>
        <tr>
            <td>Extra</td>
            <td>{{ json_encode($results['extra']) }}</td>
        </tr>
        <tr>
            <td>Faturamento</td>
            <td>Gratuito: {{ $results['billing']['free'] ? 'Sim' : 'Não' }}, Banco de
                Dados: {{ $results['billing']['database'] ? 'Sim' : 'Não' }}</td>
        </tr>
        </tbody>
    </table>
@else
    <p>Nenhum resultado encontrado.</p>
@endif
