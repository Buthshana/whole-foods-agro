
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="product.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/c9f5871d83.js" crossorigin="anonymous"></script>
        <title>Products</title>
 </head>
    <body>
        <nav class="navbar">
            <div class="logo"><h1>WHOLE FOOD™ Prodcuts</h1>
            <div class="icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-whatsapp"></i>
            </div>
        </div>
            <ul class="menu">
                <li><a href="whole_foods_welcome.php" class="active">Home</a></li>
                <li><a href="mission.php">Mission</a></li>
                <li><a href="vision.html">Vision</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-count">0</span></a></li>
            </ul>

            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>

        </nav>
        <section class="content">
            <h1>Everythings For The Farmers </h1>
            <p>Get The Best Edible forestry products</p>
            <button>Scroll down</button>
        </section>

        <h1 class="pheading">Our Fresh Products</h1>

        <section class="sec">
            <div class="products">

        
        <div class="card">
            <div class="img"><img src="corn.jpg" alt=""></div>
            <div class="desc">SweetCorn</div>
            <div class="tittle">FRESH 10pack </div>
            <div class="box">
                <div class="price">LKR900</div>
                <button class="btn" onclick="addToCart('SweetCorn 10pack = LKR900')">Buy Now</button>
            </div>
            </div>
           

            
        <div class="card">
            <div class="img"><img src="hay.jpg" alt=""></div>
            <div class="desc">Hay</div>
            <div class="tittle">20Sets of Hay</div>
            <div class="box">
                <div class="price">LKR4500</div>
                <button class="btn" onclick="addToCart('Hay 20Sets = LKR4500')">Buy Now</button>
            </div>
            </div>
            

            
        <div class="card">
            <div class="img"><img src="almonds.jpg" alt=""></div>
            <div class="desc">Almonds</div>
            <div class="tittle">FRESH Almond Box</div>
            <div class="box">
                <div class="price">LKR3000</div>
                <button class="btn" onclick="addToCart('Almonds 1box = LKR3000')">Buy Now</button>
            </div>
            </div>
            

            
        <div class="card">
            <div class="img"><img src="honey.jpg" alt=""></div>
            <div class="desc">Honey Bee</div>
            <div class="tittle">FRESH HoneyBee bottles</div>
            <div class="box">
                <div class="price">LKR1500</div>
                <button class="btn" onclick="addToCart('Honey Bee per 1 = LKR1500')">Buy Now</button>
            </div>
            </div>
            

            
        <div class="card">
            <div class="img"><img src="milk.jpg" alt=""></div>
            <div class="desc">Fresh Milk Goat/Cow</div>
            <div class="tittle">FRESH Milk 10L</div>
            <div class="box">
                <div class="price">LKR4000</div>
                <button class="btn" onclick="addToCart('Fresh Milk 10L = LKR4000')">Buy Now</button>
            </div>
            </div>
           

            
        <div class="card">
            <div class="img"><img src="soya beans.jpg" alt=""></div>
            <div class="desc">Soya beans </div>
            <div class="tittle">10KG Box</div>
            <div class="box">
                <div class="price">LKR10000</div>
                <button class="btn" onclick="addToCart('Soya Beans 10KG = LKR10000')">Buy Now</button>
            </div>
            </div>
           

          
        <div class="card">
            <div class="img"><img src="brocali ss.png" alt=""></div>
            <div class="desc">Broccali</div>
            <div class="tittle">FRESh 10KG</div>
            <div class="box">
                <div class="price">LKR5000</div>
                <button class="btn" onclick="addToCart('borccali 10KG = LKR5000')">Buy Now</button>
            </div>
            </div>
        

            
        <div class="card">
            <div class="img"><img src="pumpkin.jpg" alt=""></div>
            <div class="desc">Pumpkin</div>
            <div class="tittle">FRESH 10KG</div>
            <div class="box">
                <div class="price">LKR4500</div>
                <button class="btn" onclick="addToCart('Pumkin 10KG = LKR4500')">Buy Now</button>
            </div>
            </div>
            

            
        <div class="card">
            <div class="img"><img src="Carrot-fruits.jpg" alt=""></div>
            <div class="desc">Carrot</div>
            <div class="tittle">FRESH Carrot bundle 10KG</div>
            <div class="box">
                <div class="price">LKR2500</div>
                <button class="btn" onclick="addToCart('Carrot-10KG = LKR2500 ')">Buy Now</button>
            </div>
            </div>
            

            </div>
        </section>

        <footer>
            <p>Copyrights at <a href=""> WHOLE FOOD™</a></p>
        </footer>
        <script>
           
            let cartCount = 0;
    
            
            function updateCartCount() {
                document.getElementById("cart-count").textContent = cartCount;
            }
    
            
            const buyButtons = document.querySelectorAll(".btn");
    
            buyButtons.forEach((button) => {
                button.addEventListener("click", () => {
                    
                    cartCount++;
                    
                    updateCartCount();
                });
            });
        </script>
        <script>
    
    function addToCart(item) {
        
        const cartItems = JSON.parse(localStorage.getItem("cart")) || [];

        
        cartItems.push(item);

        
        localStorage.setItem("cart", JSON.stringify(cartItems));

        
        cartCount++;
        updateCartCount();
    }

   
    document.addEventListener("DOMContentLoaded", () => {
        const savedCartItems = JSON.parse(localStorage.getItem("cart")) || [];
        cartCount = savedCartItems.length;
        updateCartCount();
    });
</script>

    </body>
</html>