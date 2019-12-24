{{ $Modo=='crear' ? 'Add customer':'Modify customer' }}

<div class="form-group">

    <label for="description" class="control-label">{{'Description'}}</label>
    <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">

</div>

<div class="form-group">

    <label for="quantity" class="control-label"> {{'Quantity'}}</label>
    <input type="text" class="form-control" name="quantity" id="quantity" value="{{ old('quantity') }}">

</div>

<div class="form-group">

    <label for="price" class="control-label"> {{'Price'}}</label>
    <input type="text" class="form-control" name="price" id="price"
           value="{{ old('nit') }}">

</div>

<input class="btn btn-success" type="submit" value="Add" >

<a class="btn btn-primary" href="{{ url('products') }}">Return</a>

