<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\SendDailyAbsenceReminder;
use App\Console\Commands\SendMonthlyPortfolioReminder;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
        // Jadwalkan pengingat absen harian dari Senin hingga Jumat pukul 07:00
        $schedule->command('email:daily-absence-reminder')->weekdays()->at('07:00');

        // Jadwalkan pengingat bulanan untuk mengupload portofolio setiap akhir bulan
        $schedule->command('email:monthly-portfolio-reminder')->lastDayOfMonth('07:00');
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
