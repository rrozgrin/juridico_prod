@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header align-items-center py-3">
            <div class="col d-flex justify-content-betwee">
                <div class="row">
                <h4>Categorias cadastradas</h4>
                </div>

                    <div class="col text-right">
                        <div>
                        <a class="text-info" href="categorias/create">
                            + Nova categoria
                        </a>
                    </div>
                    <div>
                        <a class="text-info" href="categoria/importar">
                            + Carregar dados por planilha
                        </a>
                    </div>

            </div>
        </div>
    </div>
    <div class="row pt-2">
        <div class="col-12">
            <table class="table">
                <thead class="" style="background-color: #233F75; color:#fff">
                    <tr class="text-center">

                        <th style="width: 33%" class="text-center">Evento</th>
                        <th style="width: 34%">Categoria</th>
                        <th style="width: 33%" class="text-center">Ação</th>

                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($cats as $cat) --}}
                        <tr class="text-center">
                            <td class="text-center">EVENTO</td>
                            <td>CATEGORIA</td>
                            <td>Editar</td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
