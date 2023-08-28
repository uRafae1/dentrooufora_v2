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
                        <div class="mb-8" style="display:flex; flex-direction:column">
                            <a class="btn btn-primary" href="/cad-categoria" role="button" style="margin-bottom: 10px">Cadastrar categoria</a>
                            <a class="btn btn-primary" href="/cad-candidato" role="button" style="margin-bottom: 10px">Cadastrar candidato</a>
                            <a class="btn btn-primary" href="/cad-votacao" role="button" style="margin-bottom: 10px">Cadastrar votação</a>
                            <a class="btn btn-primary" href="/cad-categoria-candidato" role="button" style="margin-bottom: 10px">Cadastrar um candidato em uma categoria</a>
                            <a class="btn btn-primary" href="/votacao" role="button" style="margin-bottom: 10px">Lista de votações</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
