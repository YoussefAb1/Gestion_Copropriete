@extends('backend.syndic.syndic_dashboard')

@section('syndic')
<div class="page-content">
    <div class="row profile-body">
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card rounded">
                    <div class="card-body">
                        <h6 class="card-title">Modifier un Copropriétaire</h6>
                        <form action="{{ route('syndic.update.memberCoproprietaire', $coproprietaire->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $coproprietaire->name }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="cin" class="form-label">CIN</label>
                                <input type="text" class="form-control @error('cin') is-invalid @enderror" id="cin" name="cin" value="{{ $coproprietaire->cin }}" required>
                                @error('cin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ $coproprietaire->type }}" required>
                                @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="appartement_id" class="form-label">Appartement</label>
                                <select class="form-control @error('appartement_id') is-invalid @enderror" id="appartement_id" name="appartement_id" required>
                                    @foreach($appartements as $appartement)
                                        <option value="{{ $appartement->id }}" {{ $appartement->id == $coproprietaire->appartement_id ? 'selected' : '' }}>{{ $appartement->nom_appartement }}</option>
                                    @endforeach
                                </select>
                                @error('appartement_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="immeuble" class="form-label">Immeuble</label>
                                <input type="text" class="form-control" id="immeuble" name="immeuble" value="{{ $immeuble->nom_immeuble }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="residence" class="form-label">Résidence</label>
                                <input type="text" class="form-control" id="residence" name="residence" value="{{ $residence->nom_residence }}" disabled>
                            </div>
                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
