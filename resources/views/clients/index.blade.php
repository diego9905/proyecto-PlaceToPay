Inicio(Despliegue de datos)
<table class="table table-light">
    <thead class=thead class="thead-light">
        <tr>
            <th>#</th>
            <th>name</th>
            <th>last name</th>
            <th>identification card</th>
            <th>address</th>
            <th>email</th>
            <th>phone</th>
            <th>city</th>




        </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->last_name}}</td>
            <td>{{$client->identification_card}}</td>
            <td>{{$client->address}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->city}}</td>
            <td>

            <a href="{{ url('/clients/'.$client->id_clients.'/edit') }}">
            Edit
            </a>

                |

            <form method="post" action="{{ url('/clients/'.$client->id_clients) }}">
            {{csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('delete?');" >delete</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>










