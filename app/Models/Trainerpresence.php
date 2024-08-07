<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trainerpresence extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_trainerpresence';
    protected $fillable = [
        'user_id','date','time','location','participant_id','remain'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function participant()
    {
        return $this->belongsTo(Participant::class, 'participant_id', 'id_participant');
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
