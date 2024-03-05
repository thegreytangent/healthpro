<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Illness extends Model
    {
        use HasFactory;
        use Uuid;

        public $incrementing = false;
        protected $table = 'illness';
        protected $keyType = 'string';
        protected $guarded = [];


        public function IllnessCategory(): BelongsTo
        {
            return $this->belongsTo(IllnessCategory::class, 'category_id');
        }

        public function getCategory(): string
        {
            $category_name = $this->IllnessCategory->category_name;
            return ucwords($category_name);
        }

        public function getName(): string
        {
            return ucwords($this->illness_name);
        }

    }
