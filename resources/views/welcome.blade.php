<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <title>7 Star | Home</title>
</head>
<body>
    <header>
        <nav>
            <div class="mobile_nav mobile_nav__hide">
                <div class="mobile_nav__collapse mobile_nav__collapse-hide" id="close_navbar">
                    <i class="bi bi-arrow-left-short"></i>
                </div>
                <div class="scroll_container">
                    <div class="mobile_nav-logo">
                        <div class="icon_container">
                            <img src="{{asset('frontend')}}/assets/img/icon.svg" alt="">
                        </div>
                        <span>7 Star</span>
                    </div>
                    <ul class="menu">
                        <li><a href=""><i class="bi bi-house-fill"></i> Home</a></li>
                        <li><a href="shop_page.html"><i class="bi bi-arrows-fullscreen"></i> Explore</a></li>
                        <li class="collapsible"><a href="#"><i class="bi bi-grid-1x2-fill"></i> Category
                            <ul class="collapsible_menu hide">
                                <li><a href="restaurant_room.html">Halal Foods</a></li>
                                <li><a href="">Desserts</a></li>
                                <li><a href="">Chicken</a></li>
                                <li><a href="">Pizza</a></li>
                            </ul>
                        </a></li>
                        <li><a href=""><i class="bi bi-geo-fill"></i> Track Order</a></li>
                        <li><a href=""><i class="bi bi-question-circle-fill"></i> Help</a></li>
                        <li><a href=""><i class="bi bi-person-fill"></i> Sign In</a></li>

                    </ul>
                </div>
            </div>
            <div class="primary_nav">
                <a href="index.html" class="link_standard">
                    <div class="primary_nav-logo">
                        <div class="icon_container">
                            <img src="{{asset('frontend')}}/assets/img/icon.svg" alt="">
                        </div>
                        <span>7 Star</span>
                </div></a>
                <div class="primary_nav-menu">
                    <i class="bi bi-list text-accent"></i> <span>Menu</span>
                </div>
                <div class="primary_nav-search">
                    <i class="bi bi-search search-icon"></i>
                    <input type="text" name="search" placeholder="Search for food you want..">
                    <i class="bi bi-x clear-icon"></i>
                </div>
                <ul class="primary_nav-menu_items">
                    <li><a href="">Track Order</a></li>
                    <li><a href="">Help & Contact</a></li>
                    <li><a href="" class="btn btn-bordered">Sign in</a></li>
                    <li><a href="cart.html" class="btn btn-3d"><i class="bi bi-cart-fill text-accent"></i> My Cart</a></li>
                    <li><a href="" class="btn"><i class="bi bi-person-circle text-accent"></i></a></li>
                </ul>
            </div>
            <div class="full-divider"></div>
            <div class="secondary_nav">
                <ul class="menu">
                    <li><a href="restaurant_room.html">Home Made</a></li>
                    <li><a href="restaurant_room.html">Fast Food</a></li>
                    <li><a href="restaurant_room.html">Halal Food</a></li>
                    <li><a href="restaurant_room.html">Desserts</a></li>
                    <li><a href="restaurant_room.html">Sandwich</a></li>
                    <li><a href="restaurant_room.html">Pizza</a></li>
                    <li><a href="restaurant_room.html">Rice</a></li>
                    <li><a href="restaurant_room.html">Juice</a></li>
                    <li><a href="restaurant_room.html">Salad</a></li>
                    <li><a href="restaurant_room.html">Chicken</a></li>
                    <li><a href="restaurant_room.html">Noodles</a></li>
                </ul>
            </div>
            <div class="full-divider"></div>
        </nav>
    </header>

    <div class="hero">
        <div class="glider-contain">
            <div class="glider">
                <div
                    style="background-image: url({{asset('frontend')}}/assets/img/hero.png);"
                >
                    <div class="container slide-1">
                        <div class="content ">
                            <h1>7 Star</h1>
                            <p>Start Food, Start Service</p>
                            <div class="call_to_action">
                                <a href="" class="btn btn-primary">Sign Up</a>
                                <a href="shop_page.html" class="btn btn-accent">Explore All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                style="background-image: url({{asset('frontend')}}/assets/img/hero2.png);"
                >
                    <div class="container slide-2">
                        <div class="content ">
                            <h1>Hala Food</h1>
                            <p>Start Food, Start Service</p>
                            <div class="call_to_action">
                                <a href="" class="btn btn-primary">Order Food Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
          </div>

    </div>

    <div class="container">
        <div class="popular_categories">
            <div class="section_heading">
                <h2>Popular Categories</h2>
                <a href="shop_page.html" class="btn btn-bordered">Explore All</a>
            </div>
            <div class="h_list-5 mt-subsection">
                <div class="item centered-flex">
                    <img src="{{asset('frontend')}}/assets/img/popular_categories/Ellipse 4.png" alt="" height="220px" width="220px">
                    <p>Halal</p>
                </div>
                <div class="item centered-flex">
                    <img src="{{asset('frontend')}}/assets/img/popular_categories/Ellipse 5.png" alt="" height="220px" width="220px">
                    <p>Vegetable</p>
                </div>
                <div class="item centered-flex">
                    <img src="{{asset('frontend')}}/assets/img/popular_categories/Ellipse 6.png" alt="" height="220px" width="220px">
                    <p>Rice</p>
                </div>
                <div class="item centered-flex">
                    <img src="{{asset('frontend')}}/assets/img/popular_categories/Ellipse 7.png" alt="" height="220px" width="220px">
                    <p>Chicken</p>
                </div>
                <div class="item centered-flex">
                    <img src="{{asset('frontend')}}/assets/img/popular_categories/Ellipse 8.png" alt="" height="220px" width="220px">
                    <p>Burger</p>
                </div>
            </div>
        </div>

        <!-- Hot Section -->
        <div class="hot_sales mt-section">
            <!-- Section Heading -->
            <div class="section_heading">
                <h2>Hot Sales</h2>
                <a href="shop_page.html" class="btn btn-bordered">Explore All</a>
            </div>
            <div class="items mt-subsection glider-contain">
                <!-- Slider Container -->
                <div class="hot_sales_slider">
                    <div>
                        <div class="item_card">
                            <div class="thumbnail"
                                style="background-image: url({{asset('frontend')}}/assets/img/hot_sales/Image.png)"
                            >
                                <div class="favourite"></div>
                            </div>
                            <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                            <div class="overview">
                                <div class="star_rating_container">
                                    <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                    <div class="label">4.50</div>
                                </div>
                                <p>15 Delivered</p>
                            </div>
                            <div class="pricing_container">
                                <div class="price">
                                    <p class="current_price">$49.50</p>
                                    <p class="prev_price">$99.50</p>
                                </div>
                                <p>Available</p>
                            </div>
                            <div class="add_to_cart_button">
                                <a href="" class="btn btn-primary add_to_cart_button"><i class="bi bi-cart-plus-fill"></i> &nbsp; &nbsp; Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item_card">
                            <div class="thumbnail"
                                style="background-image: url({{asset('frontend')}}/assets/img/hot_sales/Image.png)"
                            >
                            <div class="favourite"></div>
                            </div>
                            <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                            <div class="overview">
                                <div class="star_rating_container">
                                    <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                    <div class="label">4.50</div>
                                </div>
                                <p>15 Delivered</p>
                            </div>
                            <div class="pricing_container">
                                <div class="price">
                                    <p class="current_price">$49.50</p>
                                    <p class="prev_price">$99.50</p>
                                </div>
                                <p>Available</p>
                            </div>
                            <div class="add_to_cart_button">
                                <a href="" class="btn btn-primary add_to_cart_button"><i class="bi bi-cart-plus-fill"></i> &nbsp; &nbsp; Add to Cart</a>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="item_card">
                            <div class="thumbnail"
                                style="background-image: url({{asset('frontend')}}/assets/img/hot_sales/Image.png)"
                            >
                                <div class="favourite"></div>
                            </div>
                            <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                            <div class="overview">
                                <div class="star_rating_container">
                                    <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                    <div class="label">4.50</div>
                                </div>
                                <p>15 Delivered</p>
                            </div>
                            <div class="pricing_container">
                                <div class="price">
                                    <p class="current_price">$49.50</p>
                                    <p class="prev_price">$99.50</p>
                                </div>
                                <p>Available</p>
                            </div>
                            <div class="add_to_cart_button">
                                <a href="" class="btn btn-primary add_to_cart_button"><i class="bi bi-cart-plus-fill"></i> &nbsp; &nbsp; Add to Cart</a>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="item_card">
                            <div class="thumbnail"
                                style="background-image: url({{asset('frontend')}}/assets/img/hot_sales/Image.png)"
                            >
                                <div class="favourite activated"></div>
                            </div>
                            <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                            <div class="overview">
                                <div class="star_rating_container">
                                    <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                    <div class="label">4.50</div>
                                </div>
                                <p>15 Delivered</p>
                            </div>
                            <div class="pricing_container">
                                <div class="price">
                                    <p class="current_price">$49.50</p>
                                    <p class="prev_price">$99.50</p>
                                </div>
                                <p>Available</p>
                            </div>
                            <div class="add_to_cart_button">
                                <a href="" class="btn btn-primary add_to_cart_button"><i class="bi bi-cart-plus-fill"></i> &nbsp; &nbsp; Add to Cart</a>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="item_card">
                            <div class="thumbnail"
                                style="background-image: url({{asset('frontend')}}/assets/img/hot_sales/Image.png)"
                            ></div>
                            <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                            <div class="overview">
                                <div class="star_rating_container">
                                    <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                    <div class="label">4.50</div>
                                </div>
                                <p>15 Delivered</p>
                            </div>
                            <div class="pricing_container">
                                <div class="price">
                                    <p class="current_price">$49.50</p>
                                    <p class="prev_price">$99.50</p>
                                </div>
                                <p>Available</p>
                            </div>
                            <div class="add_to_cart_button">
                                <a href="" class="btn btn-primary add_to_cart_button"><i class="bi bi-cart-plus-fill"></i> &nbsp; &nbsp; Add to Cart</a>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="item_card">
                            <div class="thumbnail"
                                style="background-image: url({{asset('frontend')}}/assets/img/hot_sales/Image.png)"
                            ></div>
                            <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                            <div class="overview">
                                <div class="star_rating_container">
                                    <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                    <div class="label">4.50</div>
                                </div>
                                <p>15 Delivered</p>
                            </div>
                            <div class="pricing_container">
                                <div class="price">
                                    <p class="current_price">$49.50</p>
                                    <p class="prev_price">$99.50</p>
                                </div>
                                <p>Available</p>
                            </div>
                            <div class="add_to_cart_button">
                                <a href="" class="btn btn-primary add_to_cart_button"><i class="bi bi-cart-plus-fill"></i> &nbsp; &nbsp; Add to Cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <button aria-label="Previous" class="glider-prev sales_next">«</button>
                <button aria-label="Next" class="glider-next sales_prev">»</button>
                <div role="tablist" class="sales_dots"></div>
            </div>
        </div>
        <div class="featured_foods">
            <div class="section_heading">
                <h2>Featured Foods</h2>
            </div>
            <div class="h_list-3 mt-subsection">
                <div class="item_image_card">
                    <div
                        class="thumbnail"
                        style="background-image: url({{asset('frontend')}}/assets/img/featured_foods/image.png)"
                    >
                        <p>Swedish Food</p>
                    </div>
                    <div class="details">
                        <h5>Large Meal 1:2</h5>
                        <div class="overview">
                            <div class="star_rating_container star_rating_style">
                                <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                <div class="label">4.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item_image_card">
                    <div
                        class="thumbnail"
                        style="background-image: url({{asset('frontend')}}/assets/img/featured_foods/image2.png)"
                    >
                        <p>Swedish Food</p>
                    </div>
                    <div class="details">
                        <h5>Large Meal 1:2</h5>
                        <div class="overview">
                            <div class="star_rating_container">
                                <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                <div class="label">4.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item_image_card">
                    <div
                        class="thumbnail"
                        style="background-image: url({{asset('frontend')}}/assets/img/featured_foods/image3.png)"
                    >
                        <p>Swedish Food</p>
                    </div>
                    <div class="details">
                        <h5>Large Meal 1:2</h5>
                        <div class="overview">
                            <div class="star_rating_container">
                                <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                <div class="label">4.50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="featured_banner">
            <div class="details">
                <h2>Today's Featured Restaurant (2 Left)</h2>
                <p>Bundle For 2</p>
                <div class="star_rating_container">
                    <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                    <div class="label">4.50</div>
                </div>
            </div>
            <div
                class="thumbnail"
                style="background-image: url({{asset('frontend')}}/assets/img/banner/thumbnail.png);"
            >
                <img src="{{asset('frontend')}}/assets/img/banner/logo.png" alt="" height="100px">
                <p>Get 50% <br/> Discount</p>
            </div>
        </div>
        <div class="featured_foods">
            <div class="h_list-3 mt-subsection">
                <div class="item_image_card">
                    <div
                        class="thumbnail"
                        style="background-image: url({{asset('frontend')}}/assets/img/featured_foods/image.png)"
                    >
                        <p>Swedish Food</p>
                    </div>
                    <div class="details">
                        <h5>Large Meal 1:2</h5>
                        <div class="overview">
                            <div class="star_rating_container star_rating_style">
                                <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                <div class="label">4.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item_image_card">
                    <div
                        class="thumbnail"
                        style="background-image: url({{asset('frontend')}}/assets/img/featured_foods/image2.png)"
                    >
                        <p>Swedish Food</p>
                    </div>
                    <div class="details">
                        <h5>Large Meal 1:2</h5>
                        <div class="overview">
                            <div class="star_rating_container">
                                <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                <div class="label">4.50</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item_image_card">
                    <div
                        class="thumbnail"
                        style="background-image: url({{asset('frontend')}}/assets/img/featured_foods/image3.png)"
                    >
                        <p>Swedish Food</p>
                    </div>
                    <div class="details">
                        <h5>Large Meal 1:2</h5>
                        <div class="overview">
                            <div class="star_rating_container">
                                <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                <div class="label">4.50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="sponsors">
            <div class="img_containers">
                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 25.png" alt="">
                </div>

                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 26.png" alt="">
                </div>
                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 27.png" alt="">
                </div>
                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 28.png" alt="">
                </div>
                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 29.png" alt="">
                </div>
                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 32.png" alt="">
                </div>
                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 33.png" alt="">
                </div>
                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 34.png" alt="">
                </div>
                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 33.png" alt="">
                </div>
                <div class="img">
                    <img src="{{asset('frontend')}}/assets/img/footer/sponsors/image 35.png" alt="">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="details">
                    <div class="full_logo_inverted mt-3">
                        <div class="icon_container">
                            <img src="{{asset('frontend')}}/assets/img/icon_red.svg" alt="">
                        </div>
                        <span>7 Star</span>
                    </div>
                    <div class="address mt-3">
                        <h6>Address</h6>
                        <p>Store & Office</p>
                        <p>127 Ledbury Rd, London W11</p>
                        <p>2AQ, United Kingdom</p>
                    </div>
                    <div class="time mt-3">
                        <h6>Office Hour</h6>
                        <p>Monday to Sunday</p>
                        <p>10:00 - 18:00</p>
                    </div>
                </div>
                <div class="contact">
                    <h6 class="half_underline">Get In Touch</h6>
                    <p class="phone mt-3">Phone: +44 20 7792 9090</p>
                    <p class="service_center">Service Center</p>
                    <p class="customer_service">Customer Service</p>

                    <div class="social_icons">
                        <a href=""><img src="{{asset('frontend')}}/assets/img/social_icons/Facebook.svg" alt=""></a>
                        <a href=""><img src="{{asset('frontend')}}/assets/img/social_icons/Instagram.svg" alt=""></a>
                        <a href=""><img src="{{asset('frontend')}}/assets/img/social_icons/Twitter.svg" alt=""></a>
                        <a href=""><img src="{{asset('frontend')}}/assets/img/social_icons/Youtube.svg" alt=""></a>
                    </div>
                </div>
                <div class="userful_links">
                    <h6 class="half_underline">Userful Links</h6>
                    <ul class="mt-3">
                        <li><a href="">Warranty & Complaints</a></li>
                        <li><a href="">Order & Shipping</a></li>
                        <li><a href="">Tracking Order</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Repair</a></li>
                        <li><a href="">Terms</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </div>
                <div class="categories">
                    <h6 class="half_underline">Categories</h6>
                    <ul class="mt-3">
                        <li><a href="">Category 1</a></li>
                        <li><a href="">Category 2</a></li>
                        <li><a href="">Category 3</a></li>
                        <li><a href="">Category 4</a></li>
                        <li><a href="">Category 5</a></li>
                        <li><a href="">Category 6</a></li>
                        <li><a href="">Category 7</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('frontend')}}/assets/js/style.js"></script>
    <script src="{{asset('frontend')}}/assets/js/navbar.js"></script>
    <script src="{{asset('frontend')}}/assets/vendor/glider/glider.js"></script>

    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 1,
            dots: '#dots',
            draggable: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                duration: 0.25
            }
        });
        new Glider(document.querySelector('.hot_sales_slider'), {
            slidesToShow: 2,
            dots: '.sales_dots',
            draggable: true,
            arrows: {
                prev: '.sales_prev',
                next: '.sales_next'
            },
            responsive: [
                    {
                        // screens greater than >= 775px
                        breakpoint: 775,
                        settings: {
                            // Set to `auto` and provide item width to adjust to viewport
                            slidesToShow: 'auto',
                            slidesToScroll: 1,
                            itemWidth: 158,
                            duration: 0.25
                        }
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 1035,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            itemWidth: 'auto',
                            duration: 0.25
                        },
                    },
                    {
                        // screens greater than >= 1024px
                        breakpoint: 1360,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            itemWidth: 'auto',
                            duration: 0.25
                        },
                    }
                ]
        })
    </script>
</body>
</html>
