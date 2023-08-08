<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table            =   'groups';
    protected $primaryKey       =   'id'; // mendatory for other than id (name)
    protected $fillable         =   [
        'group_title',
    ];

}
