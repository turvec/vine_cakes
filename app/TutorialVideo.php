<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TutorialVideo extends Model
{
    /**
     * Get all of the ingredient for the TutorialVideo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class,);
    }
    /**
     * Get all of the equipments for the TutorialVideo
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipments(): HasMany
    {
        return $this->hasMany(Equipment::class, );
    }
}
