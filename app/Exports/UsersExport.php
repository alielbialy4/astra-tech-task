<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection , WithHeadings
{
    private $selectedCoulmns;
    public function __construct($selectedCoulmns) {
        $this->selectedCoulmns = $selectedCoulmns;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select($this->selectedCoulmns)->get();
    }
    public function headings(): array
    {
        $customHeadings = [
            'full_name' => 'Full Name',
            'email' => 'User Email',
            'phone_number' => 'Phone Number',
            // Add more headings as needed
        ];

        // Filter the custom headings based on selected columns
        $selectedHeadings = array_intersect_key($customHeadings, array_flip($this->selectedCoulmns));

        return $selectedHeadings;
    }
}
