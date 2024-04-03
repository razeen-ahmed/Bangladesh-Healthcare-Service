<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #28a745; /* Green color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #fff; /* White color for heading text */
        }

        .btn {
            background-color: #fff; /* White color for button background */
            color: #27a745; /* Green color for button text */
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #218838; /* Darker shade of green on hover */
            color: #fff; /* Change text color to white on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Test has been added</h1>
        <p>Your test has been added successfully!</p>
        <button class="btn" onclick="addToCart()">Return</button>
    </div>

    <script>
        function addToCart() {
            // Perform any necessary actions (e.g., adding item to cart)

            // Navigate back to the previous page
            window.history.back();
        }
    </script>
</body>
</html>
