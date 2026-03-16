<?php

namespace App\Notifications;

use App\Models\StageAttempt;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class StageCompleted extends Notification
{
     use Queueable;

     public function __construct(
          public StageAttempt $attempt,
          public string $message,
          public string $type = 'success' // success, info, warning
     ) {
     }

     public function via($notifiable): array
     {
          return ['database'];
     }

     public function toArray($notifiable): array
     {
          return [
               'message' => $this->message,
               'type' => $this->type,
               'stage_id' => $this->attempt->stage_id,
               'stage_title' => $this->attempt->stage->title,
               'score' => $this->attempt->score,
               'total_questions' => $this->attempt->total_questions,
               'passed' => $this->attempt->passed,
          ];
     }
}
