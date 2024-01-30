@extends('layout.app')

@section('titulo')
    BETWISE
@endsection

@section('home')
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo BETWISE">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mx-2">
                    <a class="nav-link text-primary-dark" href="#Geral">Visão Geral</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Historico">Histórico</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Contato">Contato</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-primary-dark" href="#Ajuda">Ajuda</a>
                </li>
            </ul>
 
            <div class="navbar-nav ml-auto">
                <button class="btn button-header mx-2 rounded-circle">
                    <img src="{{ asset('/images/icons/notifications.svg') }}" alt="Notificações">
                </button>
                <button class="btn button-header mx-2 rounded-circle">
                    <img src="{{ asset('/images/icons/help.svg') }}" alt="Ajuda">
                </button>
                <button class="btn button-header mx-2 rounded-circle">
                    <img src="{{ asset('/images/icons/settings.svg') }}" alt="Configurações">
                </button>

                <button class="btn mx-2 rounded-circle">
                    <img src="{{ asset('/images/profile/Profile Picture.jpg') }}" alt="Foto do Perfil" class="profile-picture">
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Visão Geral -->
<div class="container-fluid custom-container d-flex align-items-top">
    <div class="container">
        <hr style="background-color: #7a8191; height: 1px; border: none;">
        <div class="row">
            <div class="col-auto">
                <img src="{{ asset('/images/profile/Profile Picture.jpg') }}" alt="Foto do Perfil" class="profile-picture-2 mr-2">
            </div>
            <div class="col-auto">
                <div class="row">
                    <div>
                        <p class="text-light m-0">Olá,<strong> Jheymerson</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <p class="text-light m-0">Você tem mais<strong> 7 dias </strong>de teste grátis</p>
                    </div>
                </div>
            </div>

        </div>
        <hr style="background-color: #7a8191; height: 1px; border: none;">
        <div class="row my-4">
            <div class="col ">
                <h4 class="text-light">Cálculo das apostas</h4>
            </div>
        </div>
    </div>
</div>

<!-- Tabela de apostas -->
<div class="container custom-container-2 d-flex align-items-top">
    <div class="container">
        <!-- Índice de pesquisa -->
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h6>Casas de apostas:</h6>
                    </div>
                    <div class="col">
                        <button></button>
                        <button></button>
                        <button></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <h6>Cálcular o empate?</h6>
                <button></button>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h6>Valor a apostar:</h6>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="R$ ">
                    </div>
                    <div class="col">
                        <button></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tabela -->
        <div class="row mt-2">
            <div class="col">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-end">
                Versão 0.1 Alpha
            </div>
            <div class="col d-flex justify-content-end">
                <a href="https://malpha.com.br">
                    <img src="/images/logo/Malpha.svg" alt="Logo da Empresa" style="width: 100px; height: auto;">
                </a>
            </div>
        </div>
    </div>
</footer>
@endsection
