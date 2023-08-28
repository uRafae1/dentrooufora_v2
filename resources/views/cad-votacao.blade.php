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
                            <div class="form-group">
                                <label for="titulo">Título da votação:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="categoria_id">Categoria:</label>
                                </div>
                                <select class="custom-select" id="categoria_id" name="categoria_id">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->id}}">
                                            {{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição:</label>
                                <input type="text" class="form-control" id="descricao" name="descricao">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="publica" id="publicaCheck1" value="1" checked>
                                    <label class="form-check-label" for="publicaCheck1">
                                        Pública
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="publica" id="publicaCheck2" value="0">
                                    <label class="form-check-label" for="publicaCheck2">
                                        Privada
                                    </label>
                                </div>
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