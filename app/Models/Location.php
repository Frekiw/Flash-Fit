<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_location';
    protected $fillable = [
        'name','city','photo','map'];
    
    public function jadwalkelas()
    {
        return $this->hasMany(Jadwalkelas::class, 'location_id', 'id_location');
    }
    public function trial()
    {
        return $this->hasMany(Jadwalkelas::class, 'location_id', 'id_location');
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
