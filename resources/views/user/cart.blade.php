<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h1>Shopping Cart</h1>
    <ul>
        @foreach($cartItems as $item)
            <li>{{ $item->name }} - ${{ $item->price }}</li>
        @endforeach
    </ul>
    <p>Total: ${{ $total }}</p>
    <!-- Add more HTML and Blade template code as needed -->
</body>
</html>
