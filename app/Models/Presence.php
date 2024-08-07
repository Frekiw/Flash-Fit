<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presence extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_presence';
    protected $fillable = [
        'tanggal','user_id','time','location'];

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
