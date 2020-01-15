<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        .table {
            width: 100%;
            border: 1px solid #999999;
        }
    </style>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Generated bill</th>
        <th>Delivered bill</th>
        <th>Overdue bill</th>
        <th>Company name</th>
        <th>State</th>
        <th>Detail</th>
        <th>Iva</th>
        <th>Subtotal</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bills as $bill)
        <tr>
            <td>{{ $bill->id_bills }}</td>
            <td>{{ $bill->generated_bill }}</td>
            <td>{{ $bill->delivered_bill }}</td>
            <td>{{ $bill->overdue_bill }}</td>
            <td>{{ $bill->company_name }}</td>
            <td>{{ $bill->state }}</td>
            <td>{{ $bill->detail }}</td>
            <td>{{ $bill->iva }}</td>
            <td>{{ $bill->subtotal }}</td>
            <td>{{ $bill->total }}</td>
            total
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
