<form action="{{ URL('/clients/' .$client->id_clients) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

    <label for="name">{{'name'}}</label>
    <input type="text"  name="name"  id="name" value="{{ $client->name }}">
    <br/>

    <label for="last_name">{{'last_name'}}</label>
    <input type="text"  name="last_name"  id="last_name" value="{{ $client->last_name }}">
    <br/>

    <label for="identification_card">{{'identification_card'}}</label>
    <input type="text"  name="identification_card"  id="identification_card" value="{{ $client->identification_card }}">
    <br/>

    <label for="address">{{'address'}}</label>
    <input type="text"  name="address"  id="address" value="{{ $client->address }}">
    <br/>

    <label for="email">{{'email'}}</label>
    <input type="email"  name="email"  id="email" value="{{ $client->email }}">
    <br/>

    <label for="phone">{{'phone'}}</label>
    <input type="text"  name="phone"  id="phone" value="{{ $client->phone }}">
    <br/>

    <label for="city">{{'city'}}</label>
    <input type="text"  name="city"  id="city" value="{{ $client->city }}">
    <br>
    <input type="submit" value="Edit">


</form>
