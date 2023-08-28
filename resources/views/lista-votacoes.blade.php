@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Votações disponíveis') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="mb-8" style="display:flex; flex-direction:column">
                            @foreach ($votacoes as $votacao)
                                <a class="btn btn-primary" href="{{ route('votacao', ['hash' => $votacao->codigo]) }}" role="button" style="margin-bottom: 10px">{{$votacao->titulo}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection