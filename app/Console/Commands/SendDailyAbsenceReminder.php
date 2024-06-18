<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\DailyAbsenceReminder;

class SendDailyAbsenceReminder extends Command
{
    protected $signature = 'email:daily-absence-reminder';
    protected $description = 'Send a daily email reminder to students for attendance';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $students = User::where('role', 'siswa')->get();

        foreach ($students as $student) {
            Mail::to($student->email)->send(new DailyAbsenceReminder($student));
        }

         \Log::info('Daily absence reminder emails sent successfully at ' . now());

        $this->info('Daily absence reminder emails sent successfully!');
    }
}
