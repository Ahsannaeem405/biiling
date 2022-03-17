<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Mobilecompanie;

class Bill extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mobileName()
    {
        return $this->belongsTo(Mobilecompanie::class,'service_id','service_id');
    }
    
}
