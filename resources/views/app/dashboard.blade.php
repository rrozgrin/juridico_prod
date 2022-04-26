@extends('admin.layout')
@section('content')
    <div class="card">

        <div class="card-header py-3">

            <div class="row">
                <div class="col-4">
                    <label class="pl-2" style="line-height: 10%" for="area">Área</label>
                </div>
                <div class="col-4">
                    <label class="pl-2" style="line-height: 10%" for="area">Gestor</label>
                </div>
                <div class="col-4">
                    <label class="pl-2" style="line-height: 10%" for="area">Colaborador</label>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <select class="custom-select">
                        <option selected>Escolha a área</option>
                        <option value="1">ÁREA 1</option>
                        <option value="2">ÁREA 2</option>
                        <option value="3">ÁREA 3</option>
                        <option value="4">Causas estratégicas</option>
                        <option value="5">Causas Especiais</option>
                    </select>
                </div>

                <div class="col-4">
                    <select class="custom-select">
                        <option selected>Escolha o gestor</option>
                        <option value="1">Juliana</option>
                        <option value="2">Marlucy</option>
                        <option value="3">Roberto</option>
                        <option value="4">Wilson</option>
                    </select>
                </div>

                <div class="col-4">
                    <select class="custom-select">
                        <option selected>Escolha o colaborador</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div id="curve_chart" style="height: 200px"></div>
    </div>


    <div class="tableFixHead card-body p-0" >
        <table class="table" >
            <thead class="sticky-top" style="background-color: #001236; color:#fff">
                <tr class="text-center">
                    <th style="width: 15%">DIAS ÚTEIS</th>
                    <th style="width: 12%">Protocolo</th>
                    <th style="width: 12%">Env. Correção</th>
                    <th style="width: 12%">Impulsão</th>
                    <th style="width: 12%">Rateio</th>
                    <th style="width: 12%">Honorários</th>
                    <th style="width: 15%">Total Geral</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>

                <tr class="text-center">
                    <td>01/02/2022</td>
                    <td>156</td>
                    <td>123</td>
                    <td>459</td>
                    <td>2</td>
                    <td>1</td>
                    <td>866</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
