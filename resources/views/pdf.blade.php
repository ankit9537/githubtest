<html>
    <head>
        <title>Restaurant</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($data as $item)
                    <tr>
                    <td scope="row">{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->address}}</td>
                    <td>
                    <a href="edit/{{$item->id}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a href="delete/{{$item->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                  </tr>
                  
                  @endforeach
            </tbody>
        </table>
    </body>
</html>