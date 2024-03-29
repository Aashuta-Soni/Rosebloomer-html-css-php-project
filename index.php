<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rosebloomer Website</title>


    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">

    </head>

<body>

<!-- header section starts-->

<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>
    





    <a href="#" class="logo">Rosebloomer<span>.</span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>
    

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>




</header>

<!-- header section ends-->

<!--home section starts-->
<section class="home" id="home">
    <div class="content">
        <h3>Flower Gallery</h3>
        <span> The Essence of Natural Beauty </span>
        <p>Welcome to Rosebloomer, your destination for handpicked blooms and charming flowerpots. Find the perfect flowers to brighten any occasion, 
        paired with stylish pots to complement your decor. Explore the natural beauty of blossoms and the art of elegant presentation</p>
        <a href="#" class="btn">PickHere</a>

    </div>

</section>

<!--home section ends-->

<!--about section starts-->

<section class="about" id="about">

    <h1 class="heading"> <span> discover </span> us </h1>

    <div class="row">

        <div class="video-container">
            <video src="images/about.mp4" loop autoplay muted></video>
            <h3>Elite Floral and Vase Sellers</h3>
        </div>


        <div class="content">
            <h3>why choose us?</h3>
            <p>Discover the perfect blend of nature's beauty and artistic design. Explore our exquisite selection of handpicked blooms, 
             including our signature roses, and complement them with our exclusive, creatively crafted flowerpots and planters.</p>
            <p>Experience personalized service, convenient delivery, and unwavering commitment to quality and customer satisfaction.
             Choose Rosebloomer Shop to elevate your space with elegance and style. Shop with us today.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

    

</section>

<!--about section ends-->


<!--icon section starts-->
<section class="icons-contaner">

    <div class="icons">
        <img src="images/icon11.jpg" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon3.jpg" alt="">
        <div class="info">
            <h3>10 days return</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon2.jpg" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon4.jpg" alt="">
        <div class="info">
            <h3>secure payments</h3>
            <span>protected by paypal</span>
        </div>
    </div>





</section>
<!--icon section ends-->

<!--products section starts-->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/p1.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>


        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="images/p2.jpg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="images/p3.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-18%</span>
            <div class="image">
                <img src="images/p4.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="images/p5.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-19%</span>
            <div class="image">
                <img src="images/p6.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="images/p7.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-11%</span>
            <div class="image">
                <img src="images/p8.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-19%</span>
            <div class="image">
                <img src="images/p9.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-9%</span>
            <div class="image">
                <img src="images/p10.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-13%</span>
            <div class="image">
                <img src="images/p11.webp" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="images/p12.jpeg" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99 <span>$15.99</span>.</div>
            </div>
        </div>




    
    </div>


</section>

<!--products section ends-->

<!-- review section starts -->

<section class="review" id="review">
    <h1 class="heading"> customer's <span>review</span> </h1>
    <div class="box-container">
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Eum voluptas aliquam qui laborum rem tempora nemo rerum et 
            architecto itaque, possimus, dolores error dicta nam? 
            Numquam ratione mollitia deserunt in.</p>
            <div class="user">
                <img src="images/1.jpg" alt="">
                <div class="user-info">
                    <h3>emma walker</h3>
                    <span>happy customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Eum voluptas aliquam qui laborum rem tempora nemo rerum et 
            architecto itaque, possimus, dolores error dicta nam? 
            Numquam ratione mollitia deserunt in.</p>
            <div class="user">
                <img src="images/2.jpg" alt="">
                <div class="user-info">
                    <h3>alex thomas</h3>
                    <span>happy customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Eum voluptas aliquam qui laborum rem tempora nemo rerum et 
            architecto itaque, possimus, dolores error dicta nam? 
            Numquam ratione mollitia deserunt in.</p>
            <div class="user">
                <img src="images/3.jpg" alt="">
                <div class="user-info">
                    <h3>jhon deo</h3>
                    <span>happy customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

    </div>

</section>



<!-- review section ends -->

<!--contact section starts-->
<section class="contact" id="contact">
    <h1 class="heading"> <span> contact </span> us </h1>
    <div class="row">
        <form action="connection.php" method="POST">
            <input type="text"  name="name" placeholder="enter you name" class="box">
            <input type="email"  name="email" placeholder="enter your email" class="box">
            <input type="number"  name="number" placeholder="enter your mobile number" class="box" maxlength="10">
            <textarea name="message"  class="box" placeholder="enter you feedback" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>

        <div class="image">
            <img src="images/contact.jpeg" alt="">
        </div>



    </div>

</section>


<!--contact section ends-->

<!--footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">example@gmail.com</a>
            <a href="#">mumbai, india - 400104</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>
    <div class="credit"> created by <span>Aashuta Soni</span></div>

</section>

<!--footer section ends -->
</body>
</html>