@extends('admin.admin_dashboard')

@section('admin')
<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card rounded">
                    <div class="card-body">
                        <h6 class="card-title">Ajouter une Facture</h6>
                        <form method="POST" action="{{ route('store.facture') }}" class="forms-sample">
                            @csrf

                            <div class="mb-3">
                                <label for="numero_facture" class="form-label">Numéro de Facture</label>
                                <input type="text" name="numero_facture" class="form-control @error('numero_facture') is-invalid @enderror" id="numero_facture" value="{{ old('numero_facture') }}">
                                @error('numero_facture')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="date_emission" class="form-label">Date d'Émission</label>
                                <input type="date" name="date_emission" class="form-control @error('date_emission') is-invalid @enderror" id="date_emission" value="{{ old('date_emission') }}">
                                @error('date_emission')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="date_echeance" class="form-label">Date d'Échéance</label>
                                <input type="date" name="date_echeance" class="form-control @error('date_echeance') is-invalid @enderror" id="date_echeance" value="{{ old('date_echeance') }}">
                                @error('date_echeance')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="montant_total" class="form-label">Montant Total</label>
                                <input type="text" name="montant_total" class="form-control @error('montant_total') is-invalid @enderror" id="montant_total" value="{{ old('montant_total') }}">
                                @error('montant_total')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="paiement_id" class="form-label">Paiement</label>
                                <select name="paiement_id" class="form-control @error('paiement_id') is-invalid @enderror" id="paiement_id">
                                    <option value="">Sélectionner un Paiement</option>
                                    @foreach($paiements as $paiement)
                                        <option value="{{ $paiement->id }}" {{ old('paiement_id') == $paiement->id ? 'selected' : '' }}>{{ $paiement->id }} - {{ $paiement->montant }}</option>
                                    @endforeach
                                </select>
                                @error('paiement_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Ajouter</button>
                            <a href="{{ route('all.facture') }}" class="btn btn-light">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
