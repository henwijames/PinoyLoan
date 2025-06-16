<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $fillable = [
        'borrower_id',
        'amount',
        'date',
    ];

    public function borrower()
    {
        return $this->belongsTo(Borrowers::class);
    }
}
