@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="col-md-12">
                        <div class="grid simple">
                          <div class="grid-title no-border">
                            <h4>Filtros</h4>
                          </div>
                    
                          <div class="grid-body no-border">
                            <form action="{{ route('index') }}" method="get" id="filter-form">
                              
                                <div class="row">
                                    <div class="col-md-6 col-xs-12 m-b-10">
                                        <div class="input-append default no-padding col-xs-12">
                                            <input type="text" name="search" class="form-control" placeholder="Buscar">
                                        </div>
                                    </div>
                        
                                
                                    <div class="col-md-12 col-xs-12 mt-2">
                                        <!-- remove filters button -->
                                        @if ($_GET)
                                            <a href="{{ route('index') }}"
                                            class="btn btn-mini btn-default">
                                            <i class="fa fa-times"></i> Limpar filtros
                                            </a>
                                        @endif
                            
                                        <!-- submit filtering -->
                                        <button type="submit" class="btn btn-primary btn-small btn-cons pull-right">Filtrar</button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Data de Cadastro</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                              <td>{{ $client->nome }}</td>
                              <td>{{ $client->sexo }}</td>
                              <td>{{ $client->email }}</td>
                              <td>{{ $client->created_at }}</td>
                              <td><a href="{{route('admin.client.edit', $client->id)}}"><button type="button" class="btn btn-warning btn-sm">Editar</button></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
