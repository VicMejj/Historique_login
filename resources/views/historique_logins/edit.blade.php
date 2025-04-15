@extends('layouts.app')

@section('title', 'Modifier un historique de login')

@section('content')
    <form action="{{ route('historique_logins.update', $login->ID_login) }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <label>ID Utilisateur:</label>
        <input type="number" name="ID_utilisateur" value="{{ $login->ID_utilisateur }}" required>

        <label>Adresse IP:</label>
        <input type="text" name="Adresse_IP" value="{{ $login->Adresse_IP }}" required>

        <label>Statut:</label>
        <input type="text" name="Statut" value="{{ $login->Statut }}" required>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
