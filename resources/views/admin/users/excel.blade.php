@extends('admin.layout')
@section('content')
<div class="card">
    <div class="card-header align-items-center py-3">
        <div class="col d-flex justify-content-betwee">
            <h4>Usuários cadastrados</h4>
            <div class="col text-right">
                <a class="text-info" href="user/create">
                    <big> + Novo usuário </big>
                </a>
            </div>
            <div class="col text-right">
                <a class="text-info" href="/select_file/include">
                    <big> + Carregar dados por planilha </big>
                </a>

            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header py-3">
        Selecione a planilha
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action='/import_excel/import' }}>
            @csrf
            <div class="form-group">
                <label for="select_file"></label>
                <input type="file" class="form-control" name="select_file">
            </div>

            <div class="row mr-1 justify-content-end">
                <div class="col-10"></div>
                <div class="col-2"><button type="submit" name="upload" class="btn btn-success btn-block">Arquivo</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection