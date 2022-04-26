@extends('admin.layout')


@section('content')
    <div class="card  my-2">
        <div class="card-header py-3">
            Novo usuário
        </div>
        <div class="card-body">
            <form method="POST" action="/user">
                <div class="form-group">
                    <label for="name">Nome do usuário</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">e-mail</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="status" checked>
                    <label class="form-check-label" for="status">Usuário ativo?</label>
                </div>
                <div class="row mr-1 justify-content-end">
                    <div class="col-10"></div>
                    <div class="col-2"><button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
