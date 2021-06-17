<a href="{{route('products.create')}}">Create new product</a>

<table>
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discount}}</td>
                <td>
                    <a href="{{route('products.show'), $product->id}}">Show</a>
                </td>
                <td>
                    <a href="{{route('products.edit'), $product->id}}">Edit</a>
                </td>
                <td>
                    <a href="{{route('products.destroy'), $product->id}}">Delete</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>