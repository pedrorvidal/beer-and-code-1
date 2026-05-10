<?php

namespace App\Models;

use App\Enums\TransactionStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'total_price',
        'signature_id',
        'status',
    ];

    protected $casts = [
        'status' => TransactionStatus::class,
    ];
}
