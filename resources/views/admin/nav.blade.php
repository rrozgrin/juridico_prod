    <nav class="navbar fixed-top navbar-expand navbar-dark" style="background-color: #0038A8;">
        <div class="row align-items-center">
            <div class="col-2"> <img id="logo" src="{{ URL::asset('http://www.lpbkinfo.com.br/wp-content/uploads/2016/07/logoinfo_quadrada-2.png') }}" width="45" /></div>
            <div class="mr-3 ">
                <div class="col-12">
                    <p class="text-center  g-0 m-0 p-0" style="color: #F9DD16; line-height:5px; font-weight: bold" href="#">PRODUÇÃO JURÍDICO</p>
                </div>
                <div class="col-12">
                    <p class="text-center  g-0 m-0 p-0" style="color: #fffbf6;" href="#"><small>LPBK - Advogados Associados</small></p>
                </div>
            </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Produção<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carregar Dados</a>
                </li>
            </ul>
        </div>
    </nav>
