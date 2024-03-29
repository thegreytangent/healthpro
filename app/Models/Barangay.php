<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barangay extends Model
{
    use HasFactory;
    use Uuid;

    public $incrementing = false;
    protected $table = 'barangays';
    protected $keyType = 'string';
    protected $guarded = [];


    public function Address() : HasMany {
        return $this->hasMany(Address::class, 'brgy_id');
    }

}
