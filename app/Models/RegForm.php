<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegForm extends Model
{
    use HasFactory;
    protected $table = "reg_form";
    const FEE_PLANS = [
        'PKR.2000/2years Member' => 'PKR.2000/2years Member' ,
        'PKR.2500/2years Associate Member' => 'PKR.2500/2years Associate Member',
        'PKR.10000/5years Member' => 'PKR.10000/5years Member',
        'PKR.12500/5years Associate Member' =>'PKR.12500/5years Associate Member',
    ];
    const MEMBERSHIP_CATEGORY = [
        'Member(MS/M.Phil/BS.SLP)' => 'Member(MS/M.Phil/BS.SLP)',
        'Associate Member(PGDSLP/T)' => 'Associate Member(PGDSLP/T)',
    ];


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
        'verify_at',
        'expire_at',
    ];

    protected $casts = [
        'verify_at' => 'datetime',
        'expire_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function ($regForm) {
            $regForm->submission_date = Carbon::now()->toDateString();
        });
    }

}