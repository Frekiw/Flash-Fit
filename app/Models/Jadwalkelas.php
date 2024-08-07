<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwalkelas extends Model
{

    use HasFactory;
    protected $primaryKey = 'id_jadwalkelas';
    protected $fillable = [
        'photo','time','calories','name','class_id','participant_id','date','location_id'];
    
    public function participant()
    {
        return $this->belongsTo(Participant::class, 'participant_id', 'id_participant');
    }
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id_location');
    }
        public function jeniskelass()
    {
        return $this->belongsTo(Kelas::class, 'class_id');
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
