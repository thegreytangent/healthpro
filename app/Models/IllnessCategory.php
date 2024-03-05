<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IllnessCategory extends Model
{
    use HasFactory;
    use Uuid;

    public $incrementing = false;
    protected $table = 'illness_categories';
    protected $keyType = 'string';
    protected $guarded = [];


}
