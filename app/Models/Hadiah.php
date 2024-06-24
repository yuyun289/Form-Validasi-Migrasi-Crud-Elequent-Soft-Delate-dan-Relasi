<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    protected $table = "hadiah";

    public function anggota()
    {
        return $this->belongsToMany(Anggota::class);
    }
}
