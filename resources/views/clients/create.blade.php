seccion para crear empleados
<form action="{{('/clients')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

    <label for="name">{{'name'}}</label>
    <input type="text"  name="name"  id="name" value="">
    <br/>

    <label for="last_name">{{'last_name'}}</label>
    <input type="text"  name="last_name"  id="last_name" value="">
    <br/>

    <label for="identification_card">{{'identification_card'}}</label>
    <input type="text"  name="identification_card"  id="identification_card" value="">
    <br/>

    <label for="address">{{'address'}}</label>
    <input type="text"  name="address"  id="address" value="">
    <br/>

    <label for="email">{{'email'}}</label>
    <input type="email"  name="email"  id="Nombre" value="">
    <br/>

    <label for="phone">{{'phone'}}</label>
    <input type="text"  name="phone"  id="phone" value="">
    <br/>

    <label for="city">{{'city'}}</label>
    <input type="text"  name="city"  id="city" value="">




    <input type="submit" value="Agregar">
</form>
