<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trial extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_trial';
    protected $fillable = [
        'nik','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
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
