<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Jadwalkelas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faildebit extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_faildebit';
    protected $fillable = [
        'user_id','date'];
    
        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
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
