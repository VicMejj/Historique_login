@extends('layouts.app')

@section('title', 'Ajouter un historique de login')

@section('content')
    <form action="{{ route('historique_logins.store') }}" method="POST" class="form">
        @csrf
        <label>ID Utilisateur:</label>
        <input type="number" name="ID_utilisateur" required>

        <label>Adresse IP:</label>
        <input type="text" name="Adresse_IP" required>

        <label>Statut:</label>
        <input type="text" name="Statut" required>

        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection