<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $table = "candidats";

    protected $fillable = [
        'vote_id',
        'nom',
        'is_human',
        'email',
        'motivation'
    ];
}
