<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_setting';
    protected $fillable = [
        'banner','banner2','promo_pt','promo_membership','tnc_cuti','tnc_daftar1','tnc_daftar2','tnc_daftar3','tnc_pt'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

}
