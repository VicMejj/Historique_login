<?php
namespace App\Http\Controllers;

use App\Models\HistoriqueLogin;
use Illuminate\Http\Request;

class HistoriqueLoginController extends Controller
{
    public function index()
    {
        $logins = HistoriqueLogin::all();
        return view('historique_logins.index', compact('logins'));
    }

    public function create()
    {
        return view('historique_logins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_utilisateur' => 'required|integer',
            'Adresse_IP' => 'required|string',
            'Statut' => 'required|string',
        ]);

        HistoriqueLogin::create([
            'ID_utilisateur' => $request->ID_utilisateur,
            'Date_login' => now(),
            'Adresse_IP' => $request->Adresse_IP,
            'Statut' => $request->Statut,
        ]);

        return redirect()->route('historique_logins.index')->with('success', 'Login historique ajouté avec succès.');
    }

    public function edit($id)
    {
        $login = HistoriqueLogin::findOrFail($id);
        return view('historique_logins.edit', compact('login'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ID_utilisateur' => 'required|integer',
            'Adresse_IP' => 'required|string',
            'Statut' => 'required|string',
        ]);

        $login = HistoriqueLogin::findOrFail($id);
        $login->update($request->all());

        return redirect()->route('historique_logins.index')->with('success', 'Historique mis à jour.');
    }

    public function destroy($id)
    {
        $login = HistoriqueLogin::findOrFail($id);
        $login->delete();
        return redirect()->route('historique_logins.index')->with('success', 'Historique supprimé.');
    }
}

