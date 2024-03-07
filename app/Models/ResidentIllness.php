<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class ResidentIllness extends Model
    {
        use HasFactory;
        use Uuid;

        public $incrementing = false;
        protected $table = 'resident_illnesses';
        protected $keyType = 'string';
        protected $guarded = [];

        public function Resident(): BelongsTo
        {
            return $this->belongsTo(Resident::class);
        }

        public function Illness(): BelongsTo
        {
            return $this->belongsTo(Illness::class);
        }


        public function getResidentName(): string
        {
            return $this->Resident->completeName();
        }

        public function getIllnessName(): string
        {
            return $this->Illness->illness_name;
        }

        public function getIllnessCategory() : string {
            return $this->Illness->getCategory();
        }

    }
