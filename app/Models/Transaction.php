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
        'date','category','total','harga_asli','potongan','voucher','picture','status','metode_id','user_id'];

    public function detail_transaction()
    {
        return $this->hasOne(DetailTransaction::class, 'transaction_id', 'id_transaction');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function metode()
    {
        return $this->belongsTo(Metode::class, 'metode_id', 'id_metode');
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
