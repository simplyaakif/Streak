<?php

namespace App\Filament\Student\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StudentStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Enrolled Courses',  auth()->user()->student->batches->count()),
            Stat::make('Completed Courses', 0),
        ];
    }
}
