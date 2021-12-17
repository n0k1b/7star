<template>
  <header>
            <nav>
                <div class="mobile_nav mobile_nav__hide">
                    <div class="mobile_nav__collapse mobile_nav__collapse-hide" id="close_navbar">
                        <i class="bi bi-arrow-left-short"></i>
                    </div>
                    <div class="scroll_container">
                        <div class="mobile_nav-logo">
                            <div class="icon_container">
                                <router-link to="/"> <img :src="`/frontend/assets/img/icon.svg`" alt=""></router-link>

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
                     <router-link to="/">
                    <a class="link_standard">
                        <div class="primary_nav-logo">
                            <div class="icon_container">
                                <img :src="`/frontend/assets/img/icon.svg`" alt="">
                            </div>
                            <span style="color:black">7 Star</span>
                    </div></a>
                    </router-link>
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
                        <li><router-link to="/restaurant-room">Home Made</router-link></li>
                        <li><router-link to="/restaurant-room2"> Fast Food </router-link></li>
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
</template>
