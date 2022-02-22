<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Equipment extends Model
{
   /**
     * Get the tutorialVideo that owns the Ingredient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tutorialVideo(): BelongsTo
    {
        return $this->belongsTo(TutorialVideo::class,);
    }
}
