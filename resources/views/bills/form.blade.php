{{ $Modo=='crear' ? 'Add customer':'Modify customer' }}

<div class="form-group">

    <label for="customer_name" class="control-label">{{'Customer Name'}}</label>
    <select name="customer_name" id="customer_name" class="form-control" required="required">
        @foreach($clients as $client)
            <option value="{{  $client['name'] ." " . $client['last_name'] }}">{{ $client['name'] ." ". $client['last_name'] }}</option>
            <option value="{{ $client['customer_identification_card'] }}">{{ $client['customer_identification_card'] }}"</option>
        @endforeach
    </select>


<div class="form-group">

    <label for="generated_bill" class="control-label">{{'Generated Bill'}}</label>
    <input type="date" class="form-control" name="generated_bill" id="generated_bill"
           value="{{ old('generated_bill' )}}">

</div>

<div class="form-group">

    <label for="delivered_bill" class="control-label"> {{'Delivered Bill'}}</label>
    <input type="date" class="form-control" name="delivered_bill" id="delivered_bill"
           value="{{ old('delivered_bill')}}">

</div>

<div class="form-group">

    <label for="overdue_bill" class="control-label"> {{'Overdue Bill'}}</label>
    <input type="date" class="form-control" name="overdue_bill" id="overdue_bill" value="{{old('overdue_bill')}}">

</div>

<div class="form-group">

    <label for="company_name" class="control-label">{{'Company Name'}}</label>
    <input type="text" class="form-control" name="company_name" id="company_name"
           value="{{ old('company_name' )}}">

</div>

<div class="form-group">

    <label for="seller_name" class="control-label">{{'Seller Name'}}</label>
    <input type="text" class="form-control" name="seller_name" id="seller_name"
           value="{{ old('seller_name' )}}">


<div class="form-group">

    <label for="state" class="control-label"> {{'State'}}</label>
    <select name="state" id="state" class="form-control" required="required">
        @foreach($states as $state)
            <option value="{{  $state['name'] }}">{{ $state['name'] }}</option>
        @endforeach
    </select>

</div>

<div class="form-group">

    <label for="detail" class="control-label"> {{'Detail'}}</label>
    <input type="text" class="form-control" name="detail" id="detail" value="{{old('detail')}}">

</div>

<div class="form-group">

    <label for="iva" class="control-label"> {{'Iva'}}</label>
    <input type="text" class="form-control" name="iva" id="iva" value="{{old('iva')}}">

</div>

<div class="form-group">

    <label for="subtotal" class="control-label"> {{'Subtotal'}}</label>
    <input type="text" class="form-control" name="subtotal" id="subtotal" value="{{old('subtotal')}}">

</div>

<div class="form-group">

    <label for="total" class="control-label"> {{'Total'}}</label>
    <input type="text" class="form-control" name="total" id="total" value="{{old('total')}}">

</div>

<input class="btn btn-success" type="submit" value="Add">

<a class="btn btn-primary" href="{{ url('bills') }}">Return</a>
