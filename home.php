<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grocery website</title>
    <link rel="Stylesheet" href="style.css">
<link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

</head>
<body>

    <!--Header section start-->
    <Header>

        <div class="header">
           <a href="#" class="logo"><i class="fa-solid fa-bag-shopping"></i>Grocery Management System</a>


            <form action="login.php" class="SearchBox">
            <input type="text" id="Search" placeholder="Search...">
            <label for="Search" class="fa fa-search"></label>
            </form>
        </div>

        <div class="MainHeader">
            <div id="MenuBtn" class="fas fa-bars"></div>

            <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#Product">Product</a>
            <a href="#Deal">Deal</a>
            <a href="#Categority">Categority</a>
            <a href="#Contact">Contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-shopping-cart"></i>
            <i class="fas fa-user-circle"></i>
        </div>
 
        </div>
     
    </Header> 
    <!--Header section End-->
     <section class="home" id="Home">

         <div class="content">
            <span>The best grocery shop</span> 
            <h3>Get whatever you want everyday</h3>
            <a href="#" class="btn">Get started</a>
         </div>

         <div class="img">
             <img src="images/real.jpg" alt=""> 
         </div>

    </section>
     <!--Home selection Start-->

     <!--Products section start-->
    
      <section id="Products" class="products">
      <h1 class="heading">Latest <span>Products</span></h1>


       <div class="boxContainer">

        <div class="box">
            <span class="Dis">-68%</span>
            <div class="icons">
            <i class="fas fa-heart"></i>
            <i class="fas fa-share"></i>
            <i class="fas fa-eye"></i>
            </div>

            <img src="images/product1.jpeg" alt="">

            <h3>Natural Almonds</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price">$100.00 <span>$82.30</span></div>
            <div class="quantity">
                <span>Quantity : </span>
                <input type="number" min="1" max="500" value="3">
                 <span>/kg</span>
            </div>
            <a href="#" class="btn">Add to Cart</a>


        </div>

        <div class="box">
            <span class="Dis">-68%</span>
            <div class="icons">
            <i class="fas fa-heart"></i>
            <i class="fas fa-share"></i>
            <i class="fas fa-eye"></i>
            </div>

            <img src="images/dettol.jpeg" alt="">

            <h3>Dettol</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price">$100.00 <span>$82.30</span></div>
            <div class="quantity">
                <span>Quantity : </span>
                <input type="number" min="1" max="500" value="3">
                 <span>/kg</span>
            </div>
            <a href="#" class="btn">Add to Cart</a>


        </div>

        <div class="box">
            <span class="Dis">-68%</span>
            <div class="icons">
            <i class="fas fa-heart"></i>
            <i class="fas fa-share"></i>
            <i class="fas fa-eye"></i>
            </div>

            <img src="images/apple.jpeg" alt="">

            <h3>Apple</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price">$100.00 <span>$82.30</span></div>
            <div class="quantity">
                <span>Quantity : </span>
                <input type="number" min="1" max="500" value="3">
                 <span>/kg</span>
            </div>
            <a href="#" class="btn">Add to Cart</a>


        </div>

        <div class="box">
            <span class="Dis">-68%</span>
            <div class="icons">
            <i class="fas fa-heart"></i>
            <i class="fas fa-share"></i>
            <i class="fas fa-eye"></i>
            </div>

            <img src="images/cucum.jpeg" alt="">

            <h3>Cucumber</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price">$100.00 <span>$82.30</span></div>
            <div class="quantity">
                <span>Quantity : </span>
                <input type="number" min="1" max="500" value="3">
                 <span>/kg</span>
            </div>
            <a href="#" class="btn">Add to Cart</a>


        </div>

        <div class="box">
            <span class="Dis">-68%</span>
            <div class="icons">
            <i class="fas fa-heart"></i>
            <i class="fas fa-share"></i>
            <i class="fas fa-eye"></i>
            </div>

            <img src="images/products4.jpeg" alt="">

            <h3>Tea products</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price">$100.00 <span>$82.30</span></div>
            <div class="quantity">
                <span>Quantity : </span>
                <input type="number" min="1" max="500" value="3">
                 <span>/kg</span>
            </div>
            <a href="#" class="btn">Add to Cart</a>


        </div>

        <div class="box">
            <span class="Dis">-68%</span>
            <div class="icons">
            <i class="fas fa-heart"></i>
            <i class="fas fa-share"></i>
            <i class="fas fa-eye"></i>
            </div>

            <img src="images/carrot.jpeg" alt="">

            <h3>Carrot</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price">$100.00 <span>$82.30</span></div>
            <div class="quantity">
                <span>Quantity : </span>
                <input type="number" min="1" max="500" value="3">
                 <span>/kg</span>
            </div>
            <a href="#" class="btn">Add to Cart</a>


        </div>




       </div>

   
    </section>
    <!--Products section end-->
 
     <!--Custom Script-->
     <script src="index.js">
     
     </script>


</body>
</html>