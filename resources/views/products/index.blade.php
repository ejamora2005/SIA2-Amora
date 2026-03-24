<h1>Product list</h1>

@foreach($products as $product)
    <p>{{ $product->name }} - {{ $product->price }}</p>
@endforeach