<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_History extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'bank_result',
        'traking_code',
        'payment_method',
        'receipt_confirmation'
        
        
    ];




    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payment_histories';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
}
