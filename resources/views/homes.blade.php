<html>
    <head>
</head>
<body>
        <h1>Welcom To Our ERP</h1>
        <a href="{{route('addmore')}}">Add More</a>

        <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
                @foreach($res as $val)
                <tr>
                        <td>{{$i++}}</td>
                        <td>{{$val->name}}</td>
                        <td>{{$val->email}}</td>
                        <td>{{$val->mobile}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>