@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edição de Cliente') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('client.edit') }}">
                        @csrf

                        @include('client.partials.client_fields')

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- CEP AUTOCOMPLETE RETIRADO DE: https://blog.andersonmamede.com.br/autocomplete-de-endereco-pelo-CEP/ --}}

<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script>
        /*
            * Para efeito de demonstração, o JavaScript foi
            * incorporado no arquivo HTML.
            * O ideal é que você faça em um arquivo ".js" separado. Para mais informações
            * visite o endereço https://developer.yahoo.com/performance/rules.html#external
            */
        
        // Registra o evento blur do campo "cep", ou seja, a pesquisa será feita
        // quando o usuário sair do campo "cep"
        $("#cep").blur(function(){
            // Remove tudo o que não é número para fazer a pesquisa
            var cep = this.value.replace(/[^0-9]/, "");
            
            // Validação do CEP; caso o CEP não possua 8 números, então cancela
            // a consulta
            if(cep.length != 8){
                return false;
            }
            
            // A url de pesquisa consiste no endereço do webservice + o cep que
            // o usuário informou + o tipo de retorno desejado (entre "json",
            // "jsonp", "xml", "piped" ou "querty")
            var url = "https://viacep.com.br/ws/"+cep+"/json/";
            
            // Faz a pesquisa do CEP, tratando o retorno com try/catch para que
            // caso ocorra algum erro (o cep pode não existir, por exemplo) a
            // usabilidade não seja afetada, assim o usuário pode continuar//
            // preenchendo os campos normalmente
            $.getJSON(url, function(dadosRetorno){
                try{
                    // Preenche os campos de acordo com o retorno da pesquisa
                    $("#endereco").val(dadosRetorno.logradouro);
                    $("#bairro").val(dadosRetorno.bairro);
                    $("#cidade").val(dadosRetorno.localidade);
                    $('#estado').val(dadosRetorno.uf);
                }catch(ex){}
            });
        });


        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
        dd = '0' + dd;
        }

        if (mm < 10) {
        mm = '0' + mm;
        } 
            
        today = yyyy + '-' + mm + '-' + dd;
        $("#data_nascimento").attr("max", today);

        $('#sexo').val('{!! $client->sexo !!}').change();

    </script>
@endsection
