<?php

namespace App\Modules\Models\ServiceCategory;

use App\Modules\Models\Service\Service;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ServiceCategory extends Model
{
    use Sluggable;
    protected $path ='uploads/category';


    public function sluggable(){
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = array('title','slug','image','status',
    );

    protected $casts = [
        'status' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    function getImagePathAttribute(){
        return $this->path.'/'. $this->image;
    }

    function getThumbnailPathAttribute(){
        return $this->path.'/thumb/'. $this->image;
    }

    public function categories()
    {
        return $this->hasMany(Service::class,'category_id','id')->orderBy('created_at', 'desc');
    }

}
