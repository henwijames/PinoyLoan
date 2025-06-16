<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowers extends Model
{
    /** @use HasFactory<\Database\Factories\BorrowersFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'contact_number',
        'amount_borrowed',
        'amount_paid',
        'balance',
        'date_borrowed',
        'due_date',
        'status',
    ];


    public function payments()
    {
        return $this->hasMany(Payments::class);
    }
}
