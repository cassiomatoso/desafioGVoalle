@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Olá, ' . Auth::user()->name . '!') }}
                    </div>
                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Produtos</h5>
                                        <p class="card-text">Módulo para o gerenciamento dos produtos.</p>
                                        <a href="#" class="btn btn-primary">Acessar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Clientes</h5>
                                        <p class="card-text">Módulo para o gerenciamento dos Clientes</p>
                                        <a href="#" class="btn btn-primary">Acessar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pedidos</h5>
                                        <p class="card-text">Controle dos pedidos.</p>
                                        <a href="#" class="btn btn-primary">Acessar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Usuários</h5>
                                        <p class="card-text">Gerenciamento dos usuários</p>
                                        <a href="#" class="btn btn-primary">Acessar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
