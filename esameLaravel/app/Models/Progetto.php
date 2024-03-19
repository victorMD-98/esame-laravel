<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Progetto extends Model
{
    use HasFactory;

    protected $fillable=[
        "title",
        "user_id"
    ];

    public function attivita(): HasMany {
        return $this->hasMany(attivita::class);
    }
}
