<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Shopping Cart</title>
</head>
<body>
    <div class="cart-container">
        <h1>Your Shopping Cart</h1>
        <ul id="cart-items">
           
        </ul>
        <button onclick="buyNow()">Buy Now</button>
        <button onclick="clearCart()">Clear All</button>
    </div>

    
    <script>
       
        const cartItems = JSON.parse(localStorage.getItem("cart")) || [];

        
        const cartList = document.getElementById("cart-items");
        cartItems.forEach(item => {
            const li = document.createElement("li");
            li.textContent = item;
            cartList.appendChild(li);
        });

        
        function buyNow() {
            
            window.location.href = "payment.php";
        }

        
        function clearCart() {
            
            localStorage.removeItem("cart");

            
            while (cartList.firstChild) {
                cartList.removeChild(cartList.firstChild);
            }
        }
    </script>
    
</body>

</html>
