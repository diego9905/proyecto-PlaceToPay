<?php

namespace App\Exports;

use App\Bill;
use Maatwebsite\Excel\Concerns\FromCollection;

class BillsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Bill::select("id_bills", "generated_bill", "delivered_bill", "overdue_bill", "company_name", "state", "detail", "iva", "subtotal", "total")->get();
    }
}
