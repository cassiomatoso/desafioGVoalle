@extends('purchases.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <h3> Gerenciamento - Pedidos de Vendas </h3>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('purchases.create') }}"> Novo</a>
                            <a class="btn btn-primary" href="{{ route('admin.home') }}"> Voltar</a>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-condensed table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Cód</th>
                                        <th>Produto</th>
                                        <th>Valor final</th>
                                        <th>Cliente</th>
                                        <th colspan="3"> Ver/Editar/Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                        <tr>
                                            <td>{{ $purchase->id }}</td>
                                            <td>{{ $purchase->products_title }}</td>
                                            <td>R$ {{ number_format($purchase->products_price) }}</td>
                                            <td>{{ $purchase->customers_company }}</td>
                                            <td align="center">
                                                <form action="{{ route('purchases.destroy', $purchase->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-info btn-sm"
                                                        href="{{ route('purchases.show', $purchase->id) }}" target="_blank">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </a>
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('purchases.edit', $purchase->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row text-center">
                            {!! $purchases->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
