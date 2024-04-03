<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceTest extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'test_id',
        'amount',
        'quantity',
        'total_amount',


    ];

    public function test() {
        return $this->belongsTo(tests::class);
    }
}
