<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo, ini halaman index</title>
</head>
<body>
    <h1>List Products</h1>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="/products/{{$product->id}}/edit">Edit</a>
                        <form action="/products/{{$product->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete">
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <a href="products/create">Create</a>
    </table>
</body>
</html>