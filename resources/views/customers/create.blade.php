@extends('customers.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <h3> Cadastro - Cliente </h3>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Voltar</a>
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
                        <form action="{{ route('customers.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Razão Social:</strong>
                                        <input type="text" name="company" class="form-control" placeholder="Ex.: Grupo Voalle">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>E-Mail principal:</strong>
                                        <input type="email" name="email" class="form-control" placeholder="Ex.: razaosocial@dominio.com.br">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>CNPJ:</strong>
                                        <input type="text" name="cnpj" class="form-control" placeholder="Ex.: 00.000.000/0001-00">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>UF:</strong>
                                        <input type="text" name="uf" class="form-control" placeholder="Ex.: Rio Grande do Sul">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Cidade:</strong>
                                        <input type="text" name="city" class="form-control" placeholder="Ex.: Santa Maria">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>Bairro:</strong>
                                        <input type="text" name="district" class="form-control" placeholder="Ex.: Centro">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <strong>Nro:</strong>
                                        <input type="number" name="nro" class="form-control" placeholder="Ex.: 1234">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <strong>Logradouro:</strong>
                                        <input type="text" name="street" class="form-control" placeholder="Ex.: BR-158">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <strong>Complemento:</strong>
                                        <input type="text" name="complement" class="form-control" placeholder="Ex.: Sala 01">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
