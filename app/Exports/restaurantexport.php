<?php

namespace App\Exports;

use App\Models\restaurant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class restaurantexport implements FromCollection,WithHeadings
{
    public function headings():array{
        return [
            'id',
            'name',
            'address',
            'foods',
            'type',
            'roomtype',
            'image'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return restaurant::all();
        return collect(restaurant::getrestaurant());
    }
}
