<?php

namespace App\Imports;

use App\Bill;
use Maatwebsite\Excel\Concerns\ToModel;

class BillsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bill([
            'id_bills' => $row[0],
            'generated_bill' => $row[1],
            'delivered_bill' => $row[2],
            'overdue_bill' => $row[3],
            'company_name' => $row[4],
            'state' => $row[5],
            'iva' => $row[6],
            'subtotal' => $row[7],
            'total' => $row[8],


            //
        ]);
    }
}
