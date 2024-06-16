@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
@if($results)
    <p>Origem dos dados: {{ $origin }}</p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>CPF</th>
            <th>NIS</th>
            <th>Nome</th>
            <th>Mês de Disponibilização</th>
            <th>Valor</th>
            <th>Parcela</th>
        </tr>
        </thead>
        <tbody>
        @foreach($results as $result)
            <tr>
                <td>{{ $result['beneficiario']['cpfFormatado'] }}</td>
                <td>{{ $result['beneficiario']['nis'] }}</td>
                <td>{{ $result['beneficiario']['nome'] }}</td>
                <td>{{ $result['mesDisponibilizacao'] }}</td>
                <td>{{ $result['valor'] }}</td>
                <td>{{ $result['numeroParcela'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>Nenhum resultado encontrado.</p>
@endif
