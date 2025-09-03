<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function projects() // al plurale perchè un Type può avere più progetti
    {
        return $this->hasMany(Project::class);
    }
}
