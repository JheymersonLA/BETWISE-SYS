@extends('layout.app')

@section('titulo')
    BETWISE
@endsection

@section('home')
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
@endsection
