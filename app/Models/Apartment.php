<?php

namespace App\Models;

use App\Events\ApartmentCreated;
use App\Events\ApartmentDeleted;
use App\Events\ApartmentUpdated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Apartment extends Model
{
    use HasFactory;

    protected $guarded = [""];

    protected $dispatchesEvents = [
        'created' => ApartmentCreated::class,
        'updated' => ApartmentUpdated::class,
        'deleted' => ApartmentDeleted::class
    ];

    public function mortgageProgram(): BelongsToMany
    {
        return $this->belongsToMany(MortgageProgram::class, 'apartment_mortgage_program');
    }
}
