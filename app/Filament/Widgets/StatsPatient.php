<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Support\Enums\IconPosition;
class StatsPatient extends BaseWidget
{
    public function getColumns(): int
{
    return 2; // or any other integer value
}
    protected function getStats(): array
    {
        return [
            Stat::make('Total patients', Patient::query()->count())->description('32k increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up', IconPosition::After)->color('success')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ,
            Stat::make('Total price of treatments', '21%'),
            // Stat::make('Average time on page', '3:12'),
        ];
    }
}
