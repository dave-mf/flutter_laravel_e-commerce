<h1>Edit Product</h1>
    <form action="/products/{{$products->id}}" method="POST">
    @method('PUT')    
    @csrf
        Name :<input type="text" name="name" value="{{$products->name}}"><br>
        Description :<input type="text" name="description" value="{{$products->description}}"><br>
        Price :<input type="number" name="price" value="{{$products->price}}"><br>
        Image URL :<input type="text" name="image_url" value="{{$products->image_url}}"><br>
        
        <button type="submit">Save</button>
</form>