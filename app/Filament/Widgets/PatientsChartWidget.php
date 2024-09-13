<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;



class PatientsChartWidget extends ChartWidget
{
    
    protected static ?string $heading = 'Patients Chart';
    protected static ?string $pollingInterval = '8s';
    protected function getData(): array
    {
        $data = Patient::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
        ->groupBy('month')
        ->orderBy('month')
        ->pluck('count', 'month')
        ->toArray();

        $monthlyData = array_fill(1, 12, 0); 
        
        foreach ($data as $month => $count) {
            $monthlyData[$month] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pasien',
                    'data' => array_values($monthlyData),
                ],
            ],
            'labels' => ['Jan', ' Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
    protected function getOptions(): array
    {
    return [
        'plugins' => [
            'legend' => [
                'display' => false,
            ],
            
        ],
        'scales' => [
                'y' => [
                    'ticks' => [
                        'precision' => 0
                    ],
                ],
            ],
      
    ];
}
}
