<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votant extends Model
{
    use HasFactory;

    protected $table = "vote_casts";

    protected $fillable = [
        'vote_id',
        'candidat_id',
        'statut'
    ];
}
