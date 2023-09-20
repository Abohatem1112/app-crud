<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <a href="{{route('product.create')}}">Create a Product</a>
    </div>
    <div>
        <table border="1">
            <tr>
             <th>Id</th>
             <th>name</th>
             <th>qty</th>
             <th>price</th>
             <th>Description</th>
             <th>Edit</th>
             <th>Delete</th>
            </tr>
            @foreach ($products as $products )
            <tr>
                <td>{{ $products->id }}</td>
                <td>{{ $products->name}}</td>
                <td>{{ $products->qty }}</td>
                <td>{{ $products->price}}</td>
                <td>{{ $products->description }}</td>
                <td>
                    <a href="{{route('product.edit', ['product' => $products])}}">Edit</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('product.destroy', ['product' => $products])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete"/>
                </td>

            </tr>
            @endforeach



        </table>



    </div>
</body>
</html>
