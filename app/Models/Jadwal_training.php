<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal_training extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jadwaltraining';
    protected $fillable = [
        'user_id','schedule','detail_sesi','trainer_id'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function participant()
    {
        return $this->belongsTo(Participant::class, 'trainer_id', 'id_participant');
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
