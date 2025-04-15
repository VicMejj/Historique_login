@extends('layouts.app')

@section('title', 'Liste des historiques de login')

@section('content')
    <a href="{{ route('historique_logins.create') }}" class="btn btn-primary">Ajouter un historique</a>
    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Utilisateur</th>
                <th>Date de Login</th>
                <th>Adresse IP</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logins as $login)
                <tr>
                    <td>{{ $login->ID_login }}</td>
                    <td>{{ $login->ID_utilisateur }}</td>
                    <td>{{ $login->Date_login }}</td>
                    <td>{{ $login->Adresse_IP }}</td>
                    <td>{{ $login->Statut }}</td>
                    <td>
                        <a href="{{ route('historique_logins.edit', $login->ID_login) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('historique_logins.destroy', $login->ID_login) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection