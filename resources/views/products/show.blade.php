@extends('products.layout')
@section('content')
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <h3> Relatório do Produto </h3>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-warning no-print" href="#" onclick="window.print();"> Imprimir</a>
                            <a class="btn btn-primary no-print" href="{{ route('products.index') }}"> Voltar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Produto:</strong>
                                    {{ $product->title }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>R$</strong> {{ number_format($product->price, 2) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Descrição:</strong>{{ $product->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
