<h1>Creazione nuovo prodotto</h1>

<form action="{{ route('products.store') }}" method="POST" >
    @csrf 
    @method('POST')

  <label for="name">Name: </label><br>
  <input type="text" id="name" name="name"><br>
  <label for="description">Description: </label><br>
  <textarea name="description" id="description" rows="6"></textarea><br>
  <label for="price">Price: </label><br>
  <input type="number" id="price" name="price"><br>
  <label for="discount">Discount: </label><br>
  <input type="number" id="discount" name="discount"><br>
  <button type="submit" value="send">Send</button>

</form>