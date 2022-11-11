<?php

namespace App\Modules\Models\RecentQuote;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Models\Service\Service;

class RecentQuote extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
