<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
        </ul>

            @endforeach

        @endif
    </div>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" placeholder="name" name="name"/>
        </div>
        <div>
            <label>qty</label>
            <input type="text" placeholder="qty" name="qty"/>
        </div>
        <div>
            <label>price</label>
            <input type="text" placeholder="price" name="price"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" placeholder="description" name="description"/>
        </div>
        <input type="submit" value="save a new product"/>
    </form>

</body>
</html>
