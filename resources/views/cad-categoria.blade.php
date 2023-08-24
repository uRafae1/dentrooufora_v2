@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastrar categoria') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form method="POST" action="cad-categoria/salvar">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="nome">Nome da categoria:</label>
                                <input type="text" class="form-control" id="nome" name="nome">
                            </div>
                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection