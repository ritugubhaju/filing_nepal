<?php

namespace App\Modules\Models\Menu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use App\Models\Menu\SubMenu;

class Menu extends Model
{
    use Sluggable;

    public function sluggable(){
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'name', 'url',  'order',  'status'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function subMenus()
    {
        return $this->hasMany(SubMenu::class);
    }

    public function delete(array $options = array())
    {
        if ($this->image)
            $this->image->delete();

        /** @noinspection PhpMethodParametersCountMismatchInspection */
        return parent::delete($options);
    }
}
