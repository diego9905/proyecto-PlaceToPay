{{ $Modo=='crear' ? 'Add customer':'Modify customer' }}

<div class="form-group">

    <label for="first_name" class="control-label">{{'First Name'}}</label>
    <input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('first_name') }}">

</div>

<div class="form-group">

    <label for="last_name" class="control-label"> {{'Last Name'}}</label>
    <input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}">

</div>

<div class="form-group">

    <label for="nit" class="control-label"> {{'Nit'}}</label>
    <input type="text" class="form-control" name="nit" id="nit"
           value="{{ old('nit') }}">

</div>

<div class="form-group">

    <label for="address" class="control-label"> {{'Address'}}</label>
    <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}">

</div>

<div class="form-group">

    <label for="email" class="control-label"> {{'Email'}}</label>
    <input type="email" class="form-control" name="email" id="Nombre" value="{{ old('email') }}">

</div>

<div class="form-group">

    <label for="phone" class="control-label"> {{'Phone'}}</label>
    <input type="text" class="form-control" name="phone" id="phone" value="{{old('phone')}}">

</div>

<div class="form-group">

    <label for="city" class="control-label"> {{'City'}}</label>
    <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}">

</div>

<input class="btn btn-success" type="submit" value="Add">

<a class="btn btn-primary" href="{{ url('sellers') }}">Return</a>

