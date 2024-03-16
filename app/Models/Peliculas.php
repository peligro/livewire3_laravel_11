<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tematicas;
class Peliculas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'peliculas';

    public function tematicas()
    {
        return $this->belongsTo(Tematicas::class);
    }
}
