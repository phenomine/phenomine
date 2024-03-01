<?php

namespace App\Models;

use Phenomine\Support\Model;

class User extends Model {

    protected $fillable = [
        'name',
        'email'
    ];

}
