<?php

namespace App\Imports;

use App\Models\booking;
use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class BookingImport implements ToCollection
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
                if ($row[0] != null) {
                    $bookingByCode = booking::where('code', $row[0])->first();
                    if ($bookingByCode == null) {
                        $customer = Customer::where('phone', $row[12])->first();
                        if ($customer != null) {

                            booking::create([
                                'code' => $row[0],
                                'booking_code' => $row[2],
                                'fly_code' => $row[3],
                                'customer_id' => $customer->id,
                                'service_price' => $row[5],
                                'total' => $row[6],
                                'trip' => $row[7],
                                'booking_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[8]),
                                'pay_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[9]),
                                'from' => $row[13],
                                'to' => $row[14],
                                'fly_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[15]),
                                'pay_method' => $row[16],
                                'note' => $row[17],
                            ]);
                        }
                    }
                }
            } else {
                $dem++;
            }
        }
    }
}
