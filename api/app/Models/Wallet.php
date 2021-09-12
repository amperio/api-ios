<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'type_transaction_id',
        'name',
        'value',
        'description',
        'date',
    ];

    public function type(){
        return $this->belongsTo(TypeTransaction::class, 'type_transaction_id');
    }
}
