<?php

namespace App\Imports;

use App\Models\Customer;
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
            if ($dem) {
                if ($row[4] != null && $row[10] != null && $row[11] != null && $row[12] != null) {
                    $customerByEmail = customer::where('email', $row[11])->first();
                    $customerByPhone = customer::where('phone', $row[12])->first();
                    if ($customerByEmail == null && $customerByPhone == null) {
                        Customer::create([
                            'name'  => $row[4],
                            'contact' => $row[10],
                            'email' => $row[11],
                            'phone' => $row[12]
                        ]);
                    }
                }
            } else {
                $dem++;
            }
        }
    }
}
