<?php

namespace Roshangara\EloquentUser\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roshangara\Activable\Activable;
use Roshangara\EloquentHelper\Helper;
use Roshangara\Statusable\Statusable;
use Roshangara\Translatable\Translatable;

class User extends Model
{
    use Helper, SoftDeletes, Translatable, Activable, Statusable;

    protected $table = 'users';

    public $translatable = [
        'title',
        'first_name',
        'last_name',
        'description',
    ];

    protected $fillable = [
        'uid',
        'national_code',
        'title',
        'first_name',
        'last_name',
        'email',
        'password',
        'is_active',
        'status_id',
        'birth_date',
        'nickname',
        'gender',
        'description',
        'password_question',
        'password_answer',
        'telephone',
        'cellphone',
        'username',
    ];

    protected $dates = ['deleted_at'];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}