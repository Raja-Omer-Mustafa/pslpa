<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegMemebers extends Model
{
    use HasFactory;

    protected $table = "reg_members";

    protected $fillable = [
        'id',
        'name',
        'affiliation',
        'city',
        'status',
    ];
}
