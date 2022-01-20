@extends('purchases.layout')
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
                            <h3> Pedido de Venda </h3>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-warning no-print" href="#" onclick="window.print();"> Imprimir</a>
                            <a class="btn btn-primary no-print" href="{{ route('purchases.index') }}"> Voltar</a>
                        </div>
                    </div>

                    @foreach ($purchases as $purchase)

                        <div class="card-body">
                            <div class="row justify-content-center" >
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Produto: {{ $purchase->product_title }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">
                                                R$ {{ number_format($purchase->product_price) }}</h6>
                                            <p class="card-text"> Descrição: {{ $purchase->product_description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Cliente: {{ $purchase->customer_company }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">
                                                {{ $purchase->customer_email }}</h6>
                                            <p class="card-text"> CNPJ: {{ $purchase->customer_cnpj }} | Endereço:
                                                {{ $purchase->customer_street }} -
                                                {{ $purchase->customer_nro }}/{{ $purchase->customer_district }} -
                                                {{ $purchase->customer_complement }}</p>
                                            <p class="card-text">
                                                {{ $purchase->customer_city }}/{{ $purchase->customer_uf }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Pedido efetuado por: {{ $purchase->user_name }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">
                                                {{$purchase->user_email }}</h6>
                                                <p class="card-text">
                                                    Data: {{ date('d/m/y', strtotime($purchase->created_at)) }} - {{ date('H:i', strtotime($purchase->created_at)) }} </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Observações:</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">
                                            </h6>
                                                <p class="card-text">
                                                    {{ $purchase->obs }}</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
