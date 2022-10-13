<?php

namespace App\Models;

use App\Events\MortgageProgramCreated;
use App\Events\MortgageProgramDeleted;
use App\Events\MortgageProgramUpdated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MortgageProgram extends Model
{
    use HasFactory;

    protected $guarded = [""];

    public function apartment(): BelongsToMany
    {
        return $this->belongsToMany(Apartment::class, 'apartment_mortgage_program');
    }

    protected $dispatchesEvents = [
        'created' => MortgageProgramCreated::class,
        'updated' => MortgageProgramUpdated::class,
        'deleted' => MortgageProgramDeleted::class
    ];
}
