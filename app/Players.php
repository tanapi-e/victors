<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable = [
        'name', 'age',
    ];

    public function postPlayers(array $formData)
    {
        return Players::create($formData);
    }
}
