<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;
    use Uuid;

    public $incrementing = false;
    protected $table = 'address';
    protected $keyType = 'string';
    protected $guarded = [];

    public function Barangay(): BelongsTo {
        return $this->belongsTo(Barangay::class, 'brgy_id');
    }

    public function getBarangay() : string {
        return $this->Barangay->brgy_name;
    }

    public function completeAddress() : string {
        return $this->getBarangay() . ", Prk. ".$this->prk;
    }
}
