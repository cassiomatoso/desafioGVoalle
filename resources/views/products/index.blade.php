@extends('products.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <h3> Gerenciamento - Produtos </h3>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('products.create') }}"> Novo</a>
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
                                        <th>#</th>
                                        <th>Produto</th>
                                        <th>Descrição</th>
                                        <th>Preço</th>
                                        <th colspan="3"> Ver/Editar/Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>R$ {{ number_format($product->price, 2) }}</td>
                                            <td align="center">
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    <a class="btn btn-info btn-sm" href="{{ route('products.show', $product->id) }}" target="_blank">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </a>
                                                    <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
