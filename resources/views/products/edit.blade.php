<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>update a Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
        </ul>

            @endforeach

        @endif
    </div>
    <form method="POST"  action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" placeholder="name" name="name" value="{{$product->name}}"/>
        </div>
        <div>
            <label>qty</label>
            <input type="text" placeholder="qty" name="qty" value="{{$product->qty}}"/>
        </div>
        <div>
            <label>price</label>
            <input type="text" placeholder="price" name="price" value="{{$product->price}}"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" placeholder="description" name="description"  value="{{$product->description}}"/>
        </div>
        <input type="submit" value=" update"/>
    </form>

</body>
</html>
