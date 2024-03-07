<?php

    namespace App\Models;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Resident extends Model
    {
        use HasFactory;
        use Uuid;

        public $incrementing = false;
        protected $table = 'residents';
        protected $keyType = 'string';
        protected $guarded = [];


        public function completeName(): string {
            return  ucfirst($this->lastname).", ". ucfirst($this->firstname);
        }

        public function Address(): BelongsTo
        {
            return $this->belongsTo(Address::class);
        }

        public function getAddress(): string
        {
            return $this->Address->completeAddress();
        }

        public function getAge()
        {
             $birthday = $this->birthdate;

           return Carbon::parse($birthday)->diff(Carbon::now())->format('%y year/s old');
        }

        public function getRoles(): string
        {

            return $this->family_role;

        }
    }
