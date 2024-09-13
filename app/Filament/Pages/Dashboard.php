<?php
namespace App\Filament\Pages;

use App\Filament\Widgets\PatientsChartWidget;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatsPatient;


class Dashboard extends BaseDashboard
{ 
        public function getWidgets(): array
        {
            return [
                StatsPatient::class,  
                PatientsChartWidget::class,   
            ];
        }
   
    
}
 
