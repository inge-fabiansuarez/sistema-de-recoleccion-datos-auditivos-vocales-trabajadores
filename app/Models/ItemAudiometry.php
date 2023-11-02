<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemAudiometry extends Model
{
    use HasFactory;

    public function audiometry()
    {
        return $this->belongsTo(Audiometry::class, 'audiometry_id');
    }
}
