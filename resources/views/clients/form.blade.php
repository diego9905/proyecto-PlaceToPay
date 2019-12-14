
{{ $Modo=='crear' ? 'Add customer':'Modify customer' }}

<div class="form-group">

<label for="name" class="control-label">{{'First Name'}}</label>
<input type="text" class="form-control" name="name"  id="name" value="">

</div>

<div class="form-group">

<label for="last_name" class="control-label"> {{'Last Name'}}</label>
<input type="text" class="form-control"  name="last_name"  id="last_name" value="">

</div>

<div class="form-group">

<label for="identification_card" class="control-label"> {{'Identification Card'}}</label>
<input type="text" class="form-control" name="identification_card"  id="identification_card" value="">

</div>

<div class="form-group">

<label for="address" class="control-label"> {{'Address'}}</label>
<input type="text" class="form-control" name="address"  id="address" value="">

</div>

<div class="form-group">

<label for="email" class="control-label"> {{'Email'}}</label>
<input type="email" class="form-control" name="email"  id="Nombre" value="">

</div>

<div class="form-group">

<label for="phone" class="control-label"> {{'Phone'}}</label>
<input type="text" class="form-control" name="phone"  id="phone" value="">

</div>

<div class="form-group">

<label for="city" class="control-label"> {{'City'}}</label>
<input type="text" class="form-control" name="city"  id="city" value="">

</div>

<input class="btn btn-success" type="submit" value="Add">

<a class="btn btn-primary" href="{{ url('clients') }}">Return</a>

