<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class namelist extends Model
{
    use HasFactory;
    protected $fillable = ['chineseName','englishName','contactNo','seminarName'];
}
