<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhEsubmitProfile extends Model
{
    use HasFactory;

    protected $table = 'mh_esubmit_profiles';
    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'prefixType',
        'email',
        'password',

    ];
}
