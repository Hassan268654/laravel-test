<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'url',
        'parent_id'
    ];

    public function Children()
    {
        return $this->hasMany(MenuItem::class,'parent_id','id');
    }

}
