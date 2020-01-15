{{ $Modo=='crear' ? 'Add customer':'Modify customer' }}

<div class="form-group">

    <label for="description" class="control-label">{{'Description'}}</label>
    <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">

</div>

<div class="form-group">

    <label for="reference" class="control-label"> {{'Reference'}}</label>
    <input type="text" class="form-control" name="reference" id="reference" value="{{ old('reference') }}">

</div>

<div class="form-group">

    <label for="price" class="control-label"> {{'Price'}}</label>
    <input type="text" class="form-control" name="price" id="price"
           value="{{ old('nit') }}">

</div>

<input class="btn btn-success" type="submit" value="Add">

<a class="btn btn-primary" href="{{ url('products') }}">Return</a>

