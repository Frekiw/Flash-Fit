<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailTransaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_detailtransaction';
    protected $fillable = [
        'transaction_id','detail','date','total'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function metode()
    {
        return $this->belongsTo(Metode::class, 'metode_id');
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
