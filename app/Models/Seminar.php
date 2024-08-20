<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'Seminars';

    // Define the primary key column (optional if it's 'id')
    protected $primaryKey = 'id';

    // Disable auto-incrementing if the primary key is not an integer
    public $incrementing = true;

    // Define the primary key type if necessary
    protected $keyType = 'int';

    // Disable timestamps if your table doesn't have 'created_at' and 'updated_at' columns
    public $timestamps = false;

    // Define the fillable columns
    protected $fillable = [
        'seminarName',
        'ChineseName',
        'englishName',
        'contactNo',
    ];
}
