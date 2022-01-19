@extends('customers.layout')
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
                            <h3> Relatório do Cliente </h3>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-warning no-print" href="#" onclick="window.print();"> Imprimir</a>
                            <a class="btn btn-primary no-print" href="{{ route('customers.index') }}"> Voltar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Razão Social: </strong>
                                    {{ $customer->company }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>E-Mail principal: </strong> {{ $customer->email }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>CNPJ: </strong>{{ $customer->cnpj }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>UF: </strong>{{ $customer->uf }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Cidade: </strong>{{ $customer->city }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Bairro: </strong>{{ $customer->district }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <strong>Nro: </strong>{{ $customer->nro }}
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <strong>Logradouro: </strong>{{ $customer->street }}
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <strong>Complemento: </strong>{{ $customer->complement }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
