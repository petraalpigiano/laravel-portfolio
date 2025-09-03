<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function type() // al singolare perchè un Project può avere un solo type
    {
        return $this->belongsTo(Type::class);
    }
}
