<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;


class MhEsubmitProfile extends Authenticatable 
{
    use HasApiTokens, HasFactory;

    protected $table = 'mh_esubmit_profiles';
    public $timestamps = false;
    protected $fillable = [
        'journalID',
        'companyID',
        'firstName',
        'middleName',
        'lastName',
        'prefixType',
        'primaryEmailAddress',
        'passWord',
        'passWordVisible',
    
    ];


}
