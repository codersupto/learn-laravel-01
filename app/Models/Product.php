<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['uuid', 'imageUrl', 'title', 'price', 'description'];

//    public function setUuidAttribute($value)
//    {
//        $this->attributes['uuid'] = Uuid::uuid6()->getInteger();
//    }
}
