<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Charge;
use App\Models\Appartement;
use App\Models\Immeuble;
use App\Models\Residence;
use App\Models\SyndicHistory;

class ChargeController extends Controller
{
    public function AllCharge()
{
    $user = auth()->user();

    if ($user->role === 'admin') {
        // Récupérer toutes les charges avec les données associées d'appartement, d'immeuble et de résidence
        $charges = Charge::with(['appartement.immeuble.residence'])->latest()->get();
        // Retourner la vue avec les données des charges pour l'admin
        return view('backend.charge.all_charge', compact('charges'));
    } elseif ($user->role === 'syndic') {
        // Récupérer les immeubles associés au syndic
        $immeubles_ids = SyndicHistory::where('syndic_id', $user->id)->pluck('immeuble_id');
        // Récupérer les charges associées à ces immeubles
        $charges = Charge::with(['appartement.immeuble.residence'])
            ->whereIn('immeuble_id', $immeubles_ids)
            ->latest()
            ->get();
        // Retourner la vue avec les données des charges pour le syndic
        return view('backend.charge.all_charge', compact('charges'));
    } else {
        abort(403, 'Unauthorized action.');
    }
}

// Les autres fonctions suivent le même modèle en ajustant les vues et les données récupérées en fonction du rôle de l'utilisateur.


    public function AddCharge()
    {
        $appartements = Appartement::all();
        $immeubles = Immeuble::all();
        $residences = Residence::all();

        return view('backend.charge.add_charge', compact('appartements', 'immeubles', 'residences'));
    }

    public function StoreCharge(Request $request)
    {
        $request->validate([
            'designation' => 'required',
            'type' => 'required',
            'date' => 'required|date',
            'montant' => 'required|numeric',
            'description' => 'nullable',
            'statut' => 'required',
            'appartement_id' => 'required|exists:appartements,id',
            'immeuble_id' => 'required|exists:immeubles,id',
            'residence_id' => 'required|exists:residences,id'
        ]);

        Charge::create([
            'designation' => $request->designation,
            'type' => $request->type,
            'date' => $request->date,
            'montant' => $request->montant,
            'description'=> $request->description,
            'statut'=> $request->statut,
            'appartement_id' => $request->appartement_id,
            'immeuble_id' => $request->immeuble_id,
            'residence_id' => $request->residence_id
        ]);

        return redirect()->route('all.charge')->with('success', 'Charge ajoutée avec succès');
    }

    public function EditCharge($id)
    {
        $charge = Charge::findOrFail($id);
        $appartements = Appartement::all();
        $immeubles = Immeuble::all();
        $residences = Residence::all();

        return view('backend.charge.edit_charge', compact('charge', 'appartements', 'immeubles', 'residences'));
    }

    public function UpdateCharge(Request $request, $id)
{
    $request->validate([
        'designation' => 'required',
        'type' => 'required',
        'date' => 'required|date',
        'montant' => 'required|numeric',
        'description' => 'nullable',
        'statut' => 'required',
        'appartement_id' => 'required|exists:appartements,id',
        'immeuble_id' => 'required|exists:immeubles,id',
        'residence_id' => 'required|exists:residences,id'
    ]);

    $charge = Charge::findOrFail($id);
    $charge->update([
        'designation' => $request->designation,
        'type' => $request->type,
        'date' => $request->date,
        'montant' => $request->montant,
        'description'=> $request->description,
        'statut'=> $request->statut,
        'appartement_id' => $request->appartement_id,
        'immeuble_id' => $request->immeuble_id,
        'residence_id' => $request->residence_id
    ]);

    return redirect()->route('all.charge')->with('success', 'Charge modifiée avec succès');
}


    public function DeleteCharge($id)
    {
        Charge::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Charge supprimée avec succès',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
