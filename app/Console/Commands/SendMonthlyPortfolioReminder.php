<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\MonthlyPortfolioReminder;

class SendMonthlyPortfolioReminder extends Command
{
    protected $signature = 'email:monthly-portfolio-reminder';
    protected $description = 'Send a monthly email reminder to students to upload their portfolio';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $students = User::where('role', 'siswa')->get();

        foreach ($students as $student) {
            Mail::to($student->email)->send(new MonthlyPortfolioReminder($student));
        }

        $this->info('Monthly portfolio reminder emails sent successfully!');
    }
}
