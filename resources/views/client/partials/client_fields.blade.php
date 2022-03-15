<div class="row mb-3">
    <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

    <div class="col-md-6">
        <input id="nome" type="text" placeholder="Nome completo" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('nome') ?? $client->nome }}" required autocomplete="nome" autofocus>

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
        <input id="email" type="email" placeholder="Seu principal e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $client->email }}" required autocomplete="email" readonly>

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
        <select class="form-select" id="sexo" aria-label="Sexo" name="sexo">
            <option selected value="f">Feminino</option>
            <option value="m">Masculino</option>
        </select>
    </div>

</div>

<div class="row mb-3">
    <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>

    <div class="col-md-6">
        <input id="cpf" type="text" placeholder="Apenas números" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') ?? $client->cpf }}" required autocomplete="cpf" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

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
        <input id="rg" type="text" placeholder="Apenas números" class="form-control @error('rg') is-invalid @enderror" name="rg" value="{{ old('rg') ?? $client->rg}}" required autocomplete="rg" maxlength="9" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

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
        <input id="data_nascimento" type="date" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{ old('data_nascimento') ?? $client->data_nascimento}}" required autocomplete="data_nascimento" min='1900-01-01' max='2000-12-12'>

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
        <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" value="{{ $address->cep }}" required autocomplete="cep" maxlength="9">

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
        <input id="estado" type="text" placeholder="Preenchido automaticamente via CEP!" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{ old('estado') ?? $address->estado }}" required autocomplete="estado" readonly>

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
        <input id="cidade" type="text" placeholder="Preenchido automaticamente via CEP!" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') ?? $address->cidade }}" required autocomplete="cidade" readonly>

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
        <input id="bairro" type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" value="{{ old('bairro') ?? $address->bairro }}" required autocomplete="bairro">

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
        <input id="endereco" type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" value="{{ old('endereco') ?? $address->bairro }}" required autocomplete="endereco">

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
        <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') ?? $address->numero}}" required autocomplete="numero" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

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
        <input id="complemento" type="text" class="form-control @error('complemento') is-invalid @enderror" name="complemento" value="{{ $address->complemento ?? old('complemento') }}" autocomplete="complemento">

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
        <input id="telefone" type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') ?? $client->telefone }}" required autocomplete="telefone" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

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
        <input id="celular" type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" value="{{ old('celular') ?? $client->celular }}" required autocomplete="celular" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

        @error('celular')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>