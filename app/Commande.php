<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Commande extends Model
{
    protected $fillable = ['nom', 'type', 'date', 'status'];
}
