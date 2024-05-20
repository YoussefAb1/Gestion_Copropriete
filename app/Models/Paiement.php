<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant',
        'date_paiement',
        'methode_paiement',
        'appartement_id',
        'member_coproprietaire_id',
        'member_syndic_id'
    ];

    public function compte()
    {
        return $this->morphOne(Compte::class, 'compteable');
    }

    public function facture()
    {
        return $this->belongsTo(Facture::class);
    }

    public function appartement()
    {
        return $this->belongsTo(Appartement::class);
    }

    public function memberCoproprietaire()
    {
        return $this->belongsTo(MemberCoproprietaire::class, 'member_coproprietaire_id');
    }

    public function memberSyndic()
    {
        return $this->belongsTo(MemberSyndic::class, 'member_syndic_id');
    }
}
