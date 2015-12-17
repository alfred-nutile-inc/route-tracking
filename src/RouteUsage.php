<?php

namespace AlfredNutileInc\RouteTracking;

use Illuminate\Database\Eloquent\Model;

class RouteUsage extends Model
{
    protected $fillable = ['path', 'method'];
}
