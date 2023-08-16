<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegForm extends Model
{
    use HasFactory;
    protected $table = "reg_form";


    protected $fillable = [
        'name' ,
        'father_name',
        'cnic_no',
        'city',
        'prof_qualification',
        'year_qualification',
        'mobile_no',
        'landline_no',
        'residential_address' ,
        'official_address' ,
        'email_id' ,
        'mem_cetag' ,
        'fee_schedule',
        'submission_date',
        'photo',
        'cnic_copy',
        'doc',
        'fee',
        'affiliation',
    ];

}