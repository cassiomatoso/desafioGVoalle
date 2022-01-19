@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
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
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Produtos</h5>
                                        <p class="card-text">Módulo para o gerenciamento dos Produtos.</p>
                                        <a href="{{ route('products.index') }}" class="btn btn-primary">Listar</a>
                                        <a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Clientes</h5>
                                        <p class="card-text">Módulo para o gerenciamento dos Clientes</p>
                                        <a href="{{ route('customers.index') }}" class="btn btn-primary">Listar</a>
                                        <a href="{{ route('customers.create') }}" class="btn btn-primary">Cadastrar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pedidos</h5>
                                        <p class="card-text">Módulo para o gerenciamento dos Pedidos de Venda</p>
                                        <a href="{{ route('purchases.index') }}" class="btn btn-primary">Acessar</a>
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
