<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class UtilsTesting extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setUserUuidAttribute($value)
    {
        $this->attributes['user_uuid'] = Str::uuid();
    }
}
