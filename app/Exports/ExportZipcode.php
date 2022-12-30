<?php

namespace App\Exports;

use App\Models\ZipCode;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ExportZipcode implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'Zipcode',
            'City',
            'Country',
            'Initial Delivery',
            'Initial Pickup',
            'Final Delivery',
            'Final Pick',
            'Moving'
        ];
    }
    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:H1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
            },
        ];
    }

    public function collection()
    {
        return ZipCode::select('zipcode','city','country','initial_delivery','initial_pickup','final_delivery','final_pick','moving')
        ->orderBy('city', 'ASC')
        ->get();
    }
}
