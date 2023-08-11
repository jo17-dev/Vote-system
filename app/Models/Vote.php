<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $table = "votes";

    protected $fillable = [
        'admin',
        'titre',
        'voteType',
        'description',
        'is_finished',
        'dateDebut',
        'dateFin'
    ];
}
