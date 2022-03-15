@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Cliente') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('client.register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" placeholder="Nome completo" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Seu principal e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sexo" class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>
                            <div class="col-md-6">
                                <select class="form-select" aria-label="Sexo" name="sexo">
                                    <option selected value="f">Feminino</option>
                                    <option value="m">Masculino</option>
                                </select>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" placeholder="Apenas números" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="rg" class="col-md-4 col-form-label text-md-end">{{ __('RG') }}</label>
                        
                            <div class="col-md-6">
                                <input id="rg" type="text" placeholder="Apenas números" class="form-control @error('rg') is-invalid @enderror" name="rg" value="{{ old('rg') }}" required autocomplete="rg" maxlength="9" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                        
                                @error('rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="data_nascimento" class="col-md-4 col-form-label text-md-end">{{ __('Data de Nascimento') }}</label>
                        
                            <div class="col-md-6">
                                <input id="data_nascimento" type="date" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{ old('data_nascimento') }}" required autocomplete="data_nascimento" min='1900-01-01' max='2000-12-12'>
                        
                                @error('data_nascimento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cep" class="col-md-4 col-form-label text-md-end">{{ __('CEP') }}</label>
                        
                            <div class="col-md-6">
                                <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ old('cep') }}" required autocomplete="cep" maxlength="9">
                        
                                @error('cep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="estado" class="col-md-4 col-form-label text-md-end">{{ __('Estado') }}</label>
                        
                            <div class="col-md-6">
                                <input id="estado" type="text" placeholder="Preenchido automaticamente via CEP!" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('estado') }}" required autocomplete="estado" readonly>

                                @error('estado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cidade" class="col-md-4 col-form-label text-md-end">{{ __('Cidade') }}</label>
                        
                            <div class="col-md-6">
                                <input id="cidade" type="text" placeholder="Preenchido automaticamente via CEP!" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade" readonly>
                        
                                @error('cidade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="bairro" class="col-md-4 col-form-label text-md-end">{{ __('Bairro') }}</label>
                        
                            <div class="col-md-6">
                                <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro">
                        
                                @error('bairro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="endereco" class="col-md-4 col-form-label text-md-end">{{ __('Endereço') }}</label>
                        
                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco">
                        
                                @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="numero" class="col-md-4 col-form-label text-md-end">{{ __('Número') }}</label>
                        
                            <div class="col-md-6">
                                <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                        
                                @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="complemento" class="col-md-4 col-form-label text-md-end">{{ __('Complemento') }}</label>
                        
                            <div class="col-md-6">
                                <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ old('complemento') }}" autocomplete="complemento">
                        
                                @error('complemento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telefone" class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>
                        
                            <div class="col-md-6">
                                <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                        
                                @error('telefone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="celular" class="col-md-4 col-form-label text-md-end">{{ __('Celular') }}</label>
                        
                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') }}" required autocomplete="celular" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                        
                                @error('celular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmação de Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirm" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

    </script>
@endsection
