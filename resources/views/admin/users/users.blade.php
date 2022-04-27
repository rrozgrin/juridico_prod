@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header align-items-center py-3">
            <div class="col d-flex justify-content-betwee">
                <div class="row">
                <h4>Usuários cadastrados</h4>
                </div>

                    <div class="col text-right">
                        <div>
                        <a class="text-info" href="users/create">
                            + Novo usuário
                        </a>
                    </div>
                    <div>
                        <a class="text-info" href="user/import">
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
                        <th style="width: 10%">Id</th>
                        <th style="width: 35%" class="text-left">Nome</th>
                        <th style="width: 10%">Área</th>
                        <th style="width: 15%">Função</th>
                        <th style="width: 10%">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="text-center">
                            <td>{{ $user->id }}</td>
                            <td class="text-left">{{ $user->name_user }}</td>
                            <td>{{ $user->area }}</td>
                            <td>name_role</td>
                            {{-- <td>{{ $user->roles->name_role }}</td> --}}
                            <td>Editar</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
