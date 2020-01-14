<div class="well well-sm">
    <div class="row">
        <div class="col-9">
            <label for="id_clients" class="id_clients">{{'Customer Name'}}</label>
            <select name="id_clients" id="id_clients" class="form-control" required="required">
                @foreach($clients as $client)
                    <option value="{{  $client['id_clients'] }}">{{ $client['name'] ." ". $client['last_name']." - ID: ". $client['identification_card'] }}</option>

                @endforeach
            </select>

            <label for="id_sellers" class="id_sellers">{{'Seller Name'}}</label>
            <select name="id_sellers" id="id_sellers" class="form-control" required="required">
                @foreach($sellers as $seller)
                    <option value="{{  $seller['id_sellers'] }}">{{ $seller['name'] ." ". $seller['last_name']." - NIT: ". $seller['nit'] }}</option>

                @endforeach
            </select>
        </div>
        <div class="col-6">

            <div class="row-cols-lg-2">

                <label for="generated_bill" class="control-label">{{'Generated Bill'}}</label>
                <input type="date" class="form-control" name="generated_bill" id="generated_bill"
                       value="{{ old('generated_bill' )}}">

            </div>

            <div class="row-cols-lg-2">

                <label for="delivered_bill" class="control-label"> {{'Delivered Bill'}}</label>
                <input type="date" class="form-control" name="delivered_bill" id="delivered_bill"
                       value="{{ old('delivered_bill')}}">

            </div>

        </div>

        <div class="col-6">

            <div class="row-cols-lg-2">

                <label for="overdue_bill" class="control-label"> {{'Overdue Bill'}}</label>
                <input type="date" class="form-control" name="overdue_bill" id="overdue_bill"
                       value="{{old('overdue_bill')}}">

            </div>

            <div class="row-cols-lg-2">

                <label for="company_name" class="control-label">{{'Company Name'}}</label>
                <input type="text" class="form-control" name="company_name" id="company_name"
                       value="{{ old('company_name' )}}">

            </div>
        </div>


        <div class="col-6">

            <div class="row-cols-lg-2">

                <label for="state" class="control-label"> {{'State'}}</label>
                <select name="state" id="state" class="form-control" required="required">
                    @foreach($states as $state)
                        <option value="{{  $state['name'] }}">{{ $state['name'] }}</option>
                    @endforeach
                </select>

            </div>

            <div class="row-cols-lg-2">

                <label for="detail" class="control-label"> {{'Detail'}}</label>
                <input type="text" class="form-control" name="detail" id="detail" value="{{old('detail')}}">

            </div>
        </div>

        <div class="col-6">

            <div class="row-cols-lg-2">

                <label for="iva" class="control-label"> {{'Iva'}}</label>
                <input type="text" class="form-control" name="iva" id="iva" value="{{old('iva')}}">

            </div>

            <div class="row-cols-lg-2">

                <label for="subtotal" class="control-label"> {{'Subtotal'}}</label>
                <input type="text" class="form-control" name="subtotal" id="subtotal" value="{{old('subtotal')}}">

            </div>


            <div class="row-cols-lg-2">

                <label for="total" class="control-label"> {{'Total'}}</label>
                <input type="text" class="form-control" name="total" id="total" value="{{old('total')}}">

            </div>
        </div>
    </div>
</div>

<input class="btn btn-success" type="submit" value="Add">

<a class="btn btn-primary" href="{{ url('bills') }}">Return</a>



@section('scripts')
    <script src="public/js/admin/bills/create.js"></script>
@endsection