<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'url';
    protected $keyType = 'string';

    protected $fillable = ['url', 'title', 'description', 'image'];
    protected $visible = ['url', 'title', 'description', 'image'];
}
