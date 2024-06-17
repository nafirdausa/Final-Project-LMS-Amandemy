<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;

class MonthlyPortfolioReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $student;

    public function __construct(User $student)
    {
        $this->student = $student;
    }

    public function build()
    {
        return $this->subject('Monthly Portfolio Upload Reminder')
                    ->view('emails.monthly_portfolio_reminder');
    }
}
