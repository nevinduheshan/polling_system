<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'options'];

    protected $cats = [
        'options' => 'array',
    ];

    public function votes()
    {
        return $this -> hasMany(Vote::class);
    }
}
