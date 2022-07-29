<?php

namespace App\Modules\Models\Booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Models\Service\Service;

class Booking extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
