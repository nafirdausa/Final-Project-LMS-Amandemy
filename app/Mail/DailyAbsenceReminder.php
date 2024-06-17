<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;

class DailyAbsenceReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $student;

    public function __construct(User $student)
    {
        $this->student = $student;
    }

    public function build()
    {
        return $this->subject('Daily Attendance Reminder')
                    ->view('emails.daily_absence_reminder');
    }
}
