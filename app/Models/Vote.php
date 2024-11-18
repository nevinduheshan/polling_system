<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['poll_id', 'option_index'];

    public function poll()
    {
        return $this->belongsTo((poll::class));
    }
}
