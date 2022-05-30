<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhJournals extends Model
{
    use HasFactory;
    protected $table = 'mh_journals';
    protected $fillable = [
        'name',
        'seo',
        'journalHomePage',
        'shortDescription',
        'ithenticatestatus',
        'journalDisplayStatus',
        'status',
        'leftimage',
        'detailimage',
        'bannerImage',
        'entryDate',
    
    ];
}

