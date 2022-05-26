<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhCompanies extends Model
{
    use HasFactory;

    protected $table = 'mh_companies';
     public $timestamps = false;
    protected $fillable = [
        'companyName',
        'companyShortName',
        'companySEOURL',
        'companyEmailAddress',
        'companyPhoneNumber',
        'companyWebsite',
        'companyAddress',
        'companyLogo',
        'companyDescription',
        'companyStatus',
    
    ];
}
