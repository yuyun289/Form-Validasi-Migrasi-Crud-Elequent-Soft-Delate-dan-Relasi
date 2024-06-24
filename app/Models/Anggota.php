<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = "anggota";

    public function hadiah()
    {
        return $this->belongsToMany(Hadiah::class);
    }
}
