<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session_transaction extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_session';
    protected $fillable = [
        'user_id','hargasesi_id','total_sesi','status'];

    public function user()
    {
        return $this->belongsTo(User :: class, 'user_id');
    }
    public function hargasesi()
    {
        return $this->belongsTo(Hargasesi :: class, 'hargasesi_id');
    }
    public function getJumlahKehadiranAttribute()
    {
        return Trainerpresence::where('user_id', $this->user_id)->count();
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
