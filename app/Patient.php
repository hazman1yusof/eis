<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];
    protected $hidden = [];
    protected $table = 'pat_mast';

    const CREATED_AT = 'AddUser';
    const UPDATED_AT = 'AddDate';
}
