<?php

namespace App\Exports;

use App\Models\SuhuPh;
use Maatwebsite\Excel\Concerns\FromCollection;

use App\Exports\MttRegistrationsExport;

use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SuhuPhExport implements FromCollection, WithMapping,WithHeadings
{
    private $id;

    public function __construct(int $id) 
    {
        $this->id = $id;
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SuhuPh::where('id_kolam_foreign',$this->id)->get();
    }
    public function map($suhuPh): array
    {
        return [
            $suhuPh->kolam->get(0)->nama_kolam,
            $suhuPh->waktu,
            $suhuPh->suhu,
            $suhuPh->ph
        ];
    }
    public function headings(): array
    {
        return [
            'nama kolam',
            'waktu',
            'suhu',
            'ph'
        ];
    }
}
