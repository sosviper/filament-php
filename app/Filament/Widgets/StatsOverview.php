<?php

namespace App\Filament\Widgets;

use App\Models\Holiday;
use App\Models\Timesheet;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalEmployees = User::all()->count();
        $totalHolidays = Holiday::all()->count();
        $totalTiemsheet = Timesheet::all()->count();

        return [
            Stat::make('Employees', $totalEmployees),
                // ->description('Total Employees')
                // ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('Holidays', $totalHolidays),
            Stat::make('Timesheets', $totalTiemsheet),
            // Stat::make('Unique views', '192.1k')
            //     ->description('32k increase')
            //     ->descriptionIcon('heroicon-m-arrow-trending-up')
            //     ->chart([7, 2, 10, 3, 15, 4, 17])
            //     ->color('success'),
        ];
    }
}
