<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;

    public function packaged()
    {
        return $this->belongsTo(Packaged::class);
    }
    public function sales()
    {
        return $this->belongsTo(Sales::class);
    }
    
    protected $primaryKey = 'id_participant';
    protected $fillable = [
        'tanggal','code','name','tgl_lahir','no_telp','category_m','harga_m','name_m','sales_id','packaged_id',
        'roles','total_client','rating','instagram','foto_trainer','email'];

        
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
}
