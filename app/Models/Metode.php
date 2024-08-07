<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Metode extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_metode';
    protected $fillable = [
        'name','no_rek'];
    
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
}
