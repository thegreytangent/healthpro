<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;
    use Uuid;

    public $incrementing = false;
    protected $table = 'barangays';
    protected $keyType = 'string';
    protected $guarded = [];

}
