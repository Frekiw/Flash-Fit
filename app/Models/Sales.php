<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sales extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_sales';
    protected $fillable = [
        'name','no_telp','code_sales'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
}
