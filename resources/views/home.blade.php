@extends('layout.template')

@section('titulo', 'Certificados')

@section('conteudo')
    <div class="row justify-content-center" style="margin: 12px 0;">
        <img src="{{ url('static/images/glmece.png') }}" style="max-width: 10%;height: auto;">
    </div>
    <h2 class="d-flex justify-content-center" style="margin-top: 20px; margin-bottom: 40px;">
        Certificados GLMECE
    </h2>
    <div class="justify-content-center">
        <div class="card shadow-lg p-2 mb-4 bg-body rounded" style="margin: 0 3em; border: 1px solid rgba(0,0,0,0.2);">
            <div class="container">
                <h5>Certificados por Loja</h5>

                <form action="{{ route('loja.show') }}" method="GET" style="margin: 1.2em">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                            <label for="loja_cod">Loja:</label>
                            <select class="form-control" name="loja_cod" id="loja_cod">
                                @foreach ($lojas as $item)
                                    <option value="{{ $item->loja_cod }}">
                                        {{ $item->loja_razao_social }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col" style="margin-top: 1.4em">
                            <button type="submit" class="btn btn-primary">Pesquisar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection