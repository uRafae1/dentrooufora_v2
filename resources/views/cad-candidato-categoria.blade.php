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
                        
                        <form method="POST" action="cad-categoria-candidato/salvar">
                            {{ csrf_field() }}
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
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="candidato_id">Candidato:</label>
                                </div>
                                <select class="custom-select" id="candidato_id" name="candidato_id">
                                    @foreach ($candidatos as $candidato)
                                        <option value="{{$candidato->id}}">
                                            {{$candidato->nome}}</option>
                                    @endforeach
                                </select>
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