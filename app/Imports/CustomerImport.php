<?php

namespace App\Imports;

use App\Models\customer;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class CustomerImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        $dem = 0;
        foreach ($rows as $row) {

            if ($dem > 0) {
                $customer = customer::where('email', $row[11])->where('phone', $row[12])->first();
                if ($customer == null) {
                    customer::create([
                        'name'  => $row[4],
                        'contact' => $row[10],
                        'email' => $row[11],
                        'phone' => $row[12]
                    ]);
                }
            }
            $dem++;
        }
    }
}
