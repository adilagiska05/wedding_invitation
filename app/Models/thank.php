<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thank extends Model
{
    use HasFactory;
    use HasFactory;
    protected $guarded = [];

    public function Wedding()
    {
        return $this->belongsTo(Wedding::class);
    }
}
