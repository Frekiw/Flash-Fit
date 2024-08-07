<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transaction';
    protected $fillable = [
        'date','category','total','status'];

    public function detail_transaction()
    {
        return $this->hasOne(DetailTransaction::class, 'transaction_id', 'id_transaction');
    }
    
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
}
