<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name', 'last_name', 'email'
    ];

    public $table='users';
    public $primaryKey='Uuid';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;
}
