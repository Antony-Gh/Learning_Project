<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
     protected $fillable = [
          'stage_id',
          'question_text',
          'option_a',
          'option_b',
          'option_c',
          'option_d',
          'correct_answer',
          'difficulty',
     ];

     public function stage(): BelongsTo
     {
          return $this->belongsTo(Stage::class);
     }

     public function attemptAnswers(): HasMany
     {
          return $this->hasMany(AttemptAnswer::class);
     }

     /**
      * Scope to randomize question order.
      */
     public function scopeRandomized($query)
     {
          return $query->inRandomOrder();
     }
}
