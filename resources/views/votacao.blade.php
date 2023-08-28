@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastrar votação') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    
                        <form method="POST" action="cad-votacao/salvar">
                            {{ csrf_field() }}
                            <div class="mb-8 d-flex flex-row justify-content-center align-items-center">
                                @foreach ($candidatos as $candidato)
                                    <div class="card" style="width: 18rem; margin-right: 20px">
                                        <img src="{{$candidato->foto}}" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$candidato->nome}}</h5>
                                            <a href="#" class="btn btn-primary">Votar</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection