
{{ $Modo=='crear' ? 'Add customer':'Modify customer' }}

<div class="form-group">

    <label for="generated_bill" class="control-label">{{'Generated Bill'}}</label>
    <input type="date" class="form-control" name="generated_bill"  id="generated_bill" value="">

</div>

<div class="form-group">

    <label for="delivered_bill" class="control-label"> {{'Delivered Bill'}}</label>
    <input type="date" class="form-control"  name="delivered_bill"  id="delivered_bill" value="">

</div>

<div class="form-group">

    <label for="overdue_bill" class="control-label"> {{'Overdue Bill'}}</label>
    <input type="date" class="form-control" name="overdue_bill"  id="overdue_bill" value="">

</div>

<div class="form-group">

    <label for="state" class="control-label"> {{'State'}}</label>
    <select name="state" id="state" class="form-control" required="required">
        <option value=""></option>
    </select>


</div>

<div class="form-group">

    <label for="detail" class="control-label"> {{'Detail'}}</label>
    <input type="text" class="form-control" name="detail"  id="detail" value="">

</div>

<div class="form-group">

    <label for="iva" class="control-label"> {{'Iva'}}</label>
    <input type="text" class="form-control" name="iva"  id="iva" value="">

</div>

<div class="form-group">

    <label for="subtotal" class="control-label"> {{'Subtotal'}}</label>
    <input type="text" class="form-control" name="subtotal"  id="subtotal" value="">

</div>

<div class="form-group">

    <label for="total" class="control-label"> {{'Total'}}</label>
    <input type="text" class="form-control" name="total"  id="total" value="">

</div>

<input class="btn btn-success" type="submit" value="Add">

<a class="btn btn-primary" href="{{ url('bills') }}">Return</a>
