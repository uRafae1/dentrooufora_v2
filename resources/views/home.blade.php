@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dentro ou Fora!') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <a class="btn btn-primary" href="/cad-categoria" role="button">Cadastrar categoria</a>
                        <a class="btn btn-primary" href="/cad-candidato" role="button">Cadastrar candidato</a>
                        <a class="btn btn-primary" href="/cad-votacao" role="button">Cadastrar votação</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
