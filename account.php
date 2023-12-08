<?php
 session_start();

$host="localhost";
$user="root";
$pass="";
$db="flower_site";
$connect= mysqli_connect($host,$user,$pass,$db);
$insert= "select * from flowers ";
$p=mysqli_query($connect,$insert);
$rows = $p -> fetch_all(MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viwport" content="with=device-width, initial-scale=1.0">
        <title>online flower shop</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
        <!--header section start-->
            <header>
                <input type="checkbox" name="" id="toggler">
                <label for="toggler" class="fas fa-bars"></label>    

                <a href="#" class="logo">flower<span>.</span></a>
                <nav class="navbar">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#produts">produts</a>
                    <a href="#review">review</a>
                    <a href="#contact">contact</a>
                </nav>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
     <a href="shopping_cart.php" class="fas fa-shopping-cart"></a>
                </div>
            </header>
         <!--header section end-->
        <!--home section start-->
            <section class="home" id="home">
                <div class="content">
                    <h3>fresh flowers</h3>
                    <span>natural & beautiful flowers</span>
                    <p>Online Flower Shop is a unique florist to provide flower delivery services to your loved ones. Order flowers online and we bring you the convenience to send flowers to Dubai, Abu Dhabi, Sharjah, Ajman and anywhere in UAE. You can order flowers from our flower shop Dubai for same-day flower delivery Dubai & Abu Dhabi. When our premium flower gift coupled with our excellent delivery services is received by your loved ones, they get feelings of an almost unforgettable experience.</p>
                    <a href="#" class="btn">shop now</a>
                </div>
            </section>
        <!--home section end-->
        <!--about section start-->
        <section class="about" id="about">
            <h1 class="heading"><span>about</span>us</h1>
            <div class="row">
                <div class="video-container">
                    <video src="images/video_2023-05-03_13-43-24.mp4" loop autoplay muted></video>
                    <h3>best flower sellers</h3>
                </div>
                <div class="content">
                    <h3>why choose us?</h3>
                    <p> We offer a wide selection of bouquets in a variety of colors and styles to suit any occasion. Whether you’re celebrating a birthday, anniversary, or simply want to show your love and appreciation, a flower bouquet is a thoughtful and meaningful gift. Our fresh and elegant arrangements are made with the highest quality flowers and are carefully arranged by skilled florists.  </p>
                    <p>We offer fast and convenient delivery anywhere  so you can easily send a stunning bouquet to your special someone. Don’t wait – order a beautiful flower bouquet today!</p>
                    <a href="#" class="btn">learn more</a>
                </div>
            </div>
        </section>
         <!--about section end-->
        <!--icons section start-->
        <section class="icons-container">
            <div class="icons">
                <img src="images/delivery.png" alt="">
                <div class="info">
                    <h3>free delivery</h3>
                    <span>on all orders</span>
                </div>
            </div>
            <div class="icons">
                <img src="images/$.png" alt="">
                <div class="info">
                    <h3>10 days returns</h3>
                    <span>moneyback guarantee</span>
                </div>
            </div>
                <div class="icons">
                    <img src="images/gift.png" alt="">
                    <div class="info">
                        <h3>offer & gifts</h3>
                        <span>on all orders</span>
                    </div>
                </div>
        </section>
        <!--icons section end-->
        <!--produts secion start-->
        <section class="produts" id="produts">
            <h1 class="heading">latest <span>products</span></h1>
            <div class="box-container">
            <?php?>
                <div class="box">
                    <span class="discount">-10%</span>
                    <div class="image">
                        <img src="images/1.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>flower pot</h3>
                        <div class="price">$12.99<span>$15.99</span></div>
                    </div>
                </div>

                <div class="box">
                    <span class="discount">-15%</span>
                    <div class="image">
                        <img src="images/2.webp" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>flower pot</h3>
                        <div class="price">$12.99<span>$15.99</span></div>
                    </div>
                </div>


                <div class="box">
                    <span class="discount">-5%</span>
                    <div class="image">
                        <img src="images/3.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>flower pot</h3>
                        <div class="price">$12.99<span>$15.99</span></div>
                    </div>
                </div>


                <div class="box">
                    <span class="discount">-20%</span>
                    <div class="image">
                        <img src="images/4.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>flower pot</h3>
                        <div class="price">$12.99<span>$15.99</span></div>
                    </div>
                </div>


                <div class="box">
                    <span class="discount">-17%</span>
                    <div class="image">
                        <img src="images/5.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>flower pot</h3>
                        <div class="price">$12.99<span>$15.99</span></div>
                    </div>
                </div>


                <div class="box">
                    <span class="discount">-3%</span>
                    <div class="image">
                        <img src="images/6.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>flower pot</h3>
                        <div class="price">$12.99<span>$15.99</span></div>
                    </div>
                </div>


                <div class="box">
                    <span class="discount">-18%</span>
                    <div class="image">
                        <img src="images/7.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>flower pot</h3>
                        <div class="price">$12.99<span>$15.99</span></div>
                    </div>
                </div>

                <div class="box">
                    <span class="discount">-10%</span>
                    <div class="image">
                        <img src="images/8.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>flower pot</h3>
                        <div class="price">$12.99<span>$15.99</span></div>
                    </div>
                </div>


                <div class="box">
                    <span class="discount">-5%</span>
                    <div class="image">
                        <img src="images/9.jpg" alt="">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>flower pot</h3>
                        <div class="price">$12.99<span>$15.99</span></div>
                    </div>
                </div>
            </div>
        </section> 
        <!--produts secion end-->
        <!--review section start-->
        <section class="review" id="review">
            <h1 class="heading">customer's<span>review</span></h1>
            <div class="box-container">
                <div class="box">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>best flower shop</p>
                    <div class="user">
                        <img src="images/p1.jpeg" alt="">
                        <div class="user-info">
                            <h3>Rana</h3>
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
                    <p>Fresh Flowers and Good reputation</p>
                    <div class="user">
                        <img src="images/p2.jpg" alt="">
                        <div class="user-info">
                            <h3>john</h3>
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
                    <p>high-pitched</p>
                    <div class="user">
                        <img src="images/p3.jpg" alt="">
                        <div class="user-info">
                            <h3>Khadija</h3>
                            <span>happy customer</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>
            </div>
        </section>
        <!--review section end -->
        <!--contact section start-->
        <section class="contact" id="contact">
            <h1 class="heading"> <span>contact </span>us</h1>
            <div class="row">
                <form action="">
                    <p><input type="text" placeholder="name" class="box"></p>
                    <p><input type="email" placeholder="email" class="box"></p>
                    <p><input type="number" placeholder="number" class="box"></p>
                    <p><textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea></p>
                    <p><input type="submit" value="send message" class="btn"></p>
                </form>
                <div class="image">
                    <img src="images/contact.jpg" alt="">
                </div>
            </div>
        </section>
        <!--contact section end-->
        <!--footer section start-->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick links</h3>
                    <a href="#">home</a>
                    <a href="#">about</a>
                    <a href="#">products</a>
                    <a href="#">review</a>
                    <a href="#">contact</a>
                </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my order</a>
                <a href="#">my favorite</a>
            </div>

            <div class="box">
                <h3>locations</h3>
                <a href="#">Dubai</a>
                <a href="#">UAE</a>
                <a href="#">Abu Dhabi</a>
                <a href="#">Oman</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">flower@gmail.com</a>
                <a href="#">UAE, Abu Dhabi - 400104</a>
            </div>
        </div>
            
                <div class="credit"> created by <span> R&A team </span> | all right reserved </div>
           
        </section>
        <!--footer section end-->
    </body>
</html>