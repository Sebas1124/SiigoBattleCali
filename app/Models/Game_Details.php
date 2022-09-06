<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game_Details extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primarKey = 'id_match_detail';

    protected $table = 'match_details';

    protected $fillable = [
        'id_match', 'player', 'no_rounds', 'player_winner', 'time_match'
    ];
}
