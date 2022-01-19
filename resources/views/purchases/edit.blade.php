@extends('purchases.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <h3> Edição - Pedido de Venda </h3>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('purchases.index') }}"> Voltar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Error!</strong> Houve algum problema.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('purchases.update', $purchases->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Produto:</strong>
                                        <select class="form-control" name="product_id" required>
                                            @foreach ($products as $product)
                
                                                <option value="{{$product->id}}"
                                                
                                                    {{(isset($purchases->product_id) && $purchases->product_id == $product->id ? 'selected' : '')}}> 
                                                    
                                                    {{$product->title}}
                                                    
                                                </option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Cliente:</strong>
                                        <select class="form-control" name="customer_id" required>
                                            @foreach ($customers as $customer)
                
                                                <option value="{{$customer->id}}"
                                                
                                                    {{(isset($purchases->customer_id) && $purchases->customer_id == $customer->id ? 'selected' : '')}}> 
                                                    
                                                    {{$customer->company}}
                                                    
                                                </option>
                                                
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>Descrição:</strong>
                                        <textarea class="form-control" name="obs"
                                            placeholder="Ex.: Sistema gerencial para empresas">{{ $purchases->obs }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
