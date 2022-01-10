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
                                <router-link to="/" > <img :src="`/frontend//frontend/assets/img/icon.svg`" alt=""></router-link>

                            </div>
                            <span>7 Star</span>
                        </div>
                        <ul class="menu">
                            <li><a href=""><i class="bi bi-house-fill"></i> Home</a></li>
                            <li><a href=""><i class="bi bi-arrows-fullscreen"></i> Explore</a></li>
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
                                <img :src="`/frontend//frontend/assets/img/icon.svg`" alt="">
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
                    <div class="hover_popup has_badge">
                        <!-- add class badge-none to hide the badge  -->
                        <div class="badge_top_right">{{ getCartSize }}</div>
                       <li>
                           <router-link to="/cart" class="btn btn-3d"><i class="bi bi-cart-fill text-accent"></i> My Cart</router-link></li>

                        <div class="popup">
                            <div class="heading-cart">
                                <div></div>
                                <div>
                                    <p>Item</p>
                                </div>
                                <div>
                                    <p>PRICE</p>
                                </div>
                                <div>
                                    <p>UNIT PRICE</p>
                                </div>
                            </div>
                            <div class="items">
                                <div class="item" v-for="cart in getCart" :key="cart.id">
                                    <div class="row-1">
                                        <div class="action">
                                        <i class="bi bi-x-circle-fill" @click="deleteFromCart(cart.id)"></i>
                                        </div>
                                        <div class="thumbnail">
                                             <img height="84px" loading="lazy" style="width:84px"  :src="'/'+cart.image">
                                        </div>
                                        <div class="details">
                                            <p><b>€{{ cart.price }}</b></p>
                                            <div class="quality_control">
                                                <button @click="decrementItem(cart.id)"  class="btn-rounded btn-gray">-</button><span><b>{{ cart.quantity }}</b></span><button @click="incrementItem(cart.id)" class="btn-rounded btn-gray">+</button>
                                            </div>
                                        </div>
                                        <div class="unit_price">
                                            <p><b>€{{ cart.price*cart.quantity }}</b></p>
                                        </div>
                                    </div>
                                    <div class="row-2">
                                        <p>{{ cart.name }}</p>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                    <li><a href="" class="btn"><i class="bi bi-person-circle text-accent"></i></a></li>
                </ul>
                </div>
                <div class="full-divider"></div>
                <div class="secondary_nav">
                    <ul class="menu">
                        <li v-for="category in getAllCategory" :key="category.id">
                            <router-link :to="{name:'RestaurantRoom', params:{id:category.id} }">{{ category.name }}</router-link>
                        </li>

                    </ul>
                </div>
                <div class="full-divider"></div>
            </nav>
        </header>
</template>
<script>
    export default{

        methods:{
        deleteFromCart(id)
            {

                this.$store.commit({
                type: 'deleteFromCart',
                id: id,

            })
            },
             incrementItem(id)
            {

                this.$store.commit({
                type: 'incrementCart',
                id: id,

            })
            },

             decrementItem(id)
            {

                this.$store.commit({
                type: 'decrementCart',
                id: id,

            })
            },
        },

        mounted(){
             this.$store.dispatch("allCategoryFromDatabase")
        },
        computed: {
            // ...mapState([
            //     "cart"
            // ]),
         getCart()
        {
             return this.$store.getters.getCart
        },

        getCartSize()
        {
             return this.$store.getters.cartSize
        },
        getAllCategory(){ //final output from here
            //console.log( this.$store.getters.getCategoryFormGetters);
            return this.$store.getters.getCategoryFormGetters
        }


      },
    };
</script>
