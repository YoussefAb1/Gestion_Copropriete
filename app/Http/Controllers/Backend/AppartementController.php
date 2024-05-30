<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appartement;
use App\Models\CoproprietaireHistory;
use App\Models\MemberCoproprietaire;
use App\Models\Immeuble;
use App\Models\Residence;


class AppartementController extends Controller
{
    public function AllAppartement()
    {
        $appartements = Appartement::with('coproprietaireHistories.coproprietaire.user')->get();
        return view('backend.appartement.all_appartement', compact('appartements'));
    }

    public function AddAppartement()
    {
        $immeubles = Immeuble::all();
        $residences = Residence::all();
        return view('backend.appartement.add_appartement', compact('immeubles', 'residences'));
    }

    public function StoreAppartement(Request $request)
    {
        $request->validate([
            'nom_appartement' => 'required|unique:appartements|max:255',
            'etage' => 'required',
            'surface' => 'required',
            'immeuble_id' => 'required|exists:immeubles,id',
            'residence_id' => 'required|exists:residences,id'
        ]);

        Appartement::create($request->all());

        return redirect()->route('all.appartement')->with('success', 'Appartement ajouté avec succès');
    }

    public function EditAppartement($id)
    {
        $appartement = Appartement::findOrFail($id);
        return view('backend.appartement.edit_appartement', compact('appartement'));
    }

    public function UpdateAppartement(Request $request, $id)
    {
        $request->validate([
            'nom_appartement' => 'required|max:255',
            'etage' => 'required',
            'surface' => 'required',
            'immeuble_id' => 'required|exists:immeubles,id',
            'residence_id' => 'required|exists:residences,id'
        ]);

        Appartement::findOrFail($id)->update($request->all());

        return redirect()->route('all.appartement')->with('success', 'Appartement modifié avec succès');
    }

    public function DeleteAppartement($id)
    {
        Appartement::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Appartement supprimé avec succès');
    }

    public function AddCoproprietaireToAppartement($appartementId)
    {
        $appartement = Appartement::findOrFail($appartementId);
        $coproprietaires = MemberCoproprietaire::with('user')->get();

        return view('backend.appartement.add_coproprietaire_to_appartement', compact('appartement', 'coproprietaires'));
    }

    public function StoreCoproprietaireToAppartement(Request $request, $appartementId)
    {
        $appartement = Appartement::findOrFail($appartementId);

        // Terminer l'association précédente si elle existe
        $currentHistory = $appartement->coproprietaireHistories()->whereNull('end_date')->first();
        if ($currentHistory) {
            $currentHistory->end_date = $request->start_date;
            $currentHistory->save();
        }

        // Créer une nouvelle association
        CoproprietaireHistory::create([
            'appartement_id' => $appartement->id,
            'coproprietaire_id' => $request->coproprietaire_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('all.appartement')->with('success', 'Copropriétaire ajouté avec succès');
    }

    public function CoproprietaireHistory($appartementId)
{
    $appartement = Appartement::findOrFail($appartementId);
    $coproprietaireHistories = $appartement->coproprietaireHistories()->with('coproprietaire.user')->get();

    return view('backend.appartement.history_coproprietaire_appartement', compact('appartement', 'coproprietaireHistories'));
}

}
