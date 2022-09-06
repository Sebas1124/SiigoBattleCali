<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'matchs';

    protected $primaryKey = 'id_match';

    protected $fillable = [
        'match_room'
    ];


}
