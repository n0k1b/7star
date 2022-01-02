<template>
        <div class="container space_out_nav">
        <div class="breadcrumb p-3">

        </div>
        <h1>Your Cart</h1>
        <div class="cart_details">
            <div class="cart_items">
                <table>
                    <thead>
                        <tr>
                            <th> </th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>QTY</th>
                            <th>Unit Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="cart in getCart" :key="cart.id">
                            <td :style="{'padding-right':'0'+'px'}"><button @click="deleteFromCart(cart.id)" class="btn-rounded-sm btn-primary"><i class="bi bi-x clear-icon"></i></button></td>
                            <td>
                                <div>
                                <img  class="thumbnail match_height"  :src="'/'+cart.image" >
                                </div>
                                <p :style="{'width':'234'+'px'}">{{  cart.name }}</p>
                            </td>
                            <td><b>€{{  cart.price }}</b></td>
                            <td>
                                <div class="counter">
                                    <button @click="decrementItem(cart.id)" class="btn-rounded btn-gray">-</button><span  ><b>{{ cart.quantity }}</b></span><button @click="incrementItem(cart.id)" class="btn-rounded btn-gray">+</button>
                                </div>

                            </td>
                            <td><b>€{{  cart.price*cart.quantity }}</b></td>
                        </tr>

                    </tbody>
                </table>
                <div class="cards">
                    <div class="card">
                        <div><img src="/frontend/assets/Icon-delivery-van-outlined.png" alt=""></div>
                        <div class="details">
                            <p><b>Free Standard Delivery</b></p>
                            <p>Buy more than €300 and get the chance. More info</p>
                        </div>
                    </div>
                    <div class="card">
                        <div><img src="/frontend/assets/Icon-return-outlined.png" alt=""></div>
                        <div class="details">
                            <p><b>Easy Returns</b></p>
                            <p>Buy more than €300 and get the chance. More info</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="order_summary">
                <h3>Order Summary</h3>
                <div class="row">
                    <p>Subtotal</p>
                    <p>€{{ total }}</p>
                </div>
                <div class="row">
                    <p>Shipping Fee</p>
                    <p>€{{ shippingFee }}</p>
                </div>
                <div class="row">
                    <p>Tax</p>
                    <p>€0</p>
                </div>
                <div class="row">
                    <p>Coupon</p>
                    <p>No</p>
                </div>
                <div class="row total">
                    <p>Total</p>
                    <p>€{{ total+shippingFee }}</p>
                </div>
                <div class="voucher_code">
                    <input placeholder="Voucher Code" type="text"><button>Redeem</button>
                </div>
                <a href="checkout.html" class="checkout_button button mt-1">Proceed To Checkout</a>
                <a href="" class="order_more_button button mt-1">Order More Food</a>
                <div class="payment_methods mt-2">
                    <p><b>Payment Method: </b></p>
                    <div class="cards">

                        <img src="/frontend/assets/img/payment_cards/Western-union.png" alt="">
                        <img src="/frontend/assets/img/payment_cards/Paypal.png" alt="">
                        <img src="/frontend/assets/img/payment_cards/Group 19.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="item_suggestion">
            <div class="section_heading">
                <h2>You Might Also Like</h2>
            </div>
            <div class="h_list-4 mt-subsection">
                <div>
                    <div class="item_card">
                        <div class="thumbnail"
                            style="background-image: url(/frontend/assets/img/hot_sales/Image.png)"
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
                            style="background-image: url(/frontend/assets/img/hot_sales/Image2.png)"
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
                            style="background-image: url(/frontend/assets/img/hot_sales/Image3.png)"
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
                            style="background-image: url(/frontend/assets/img/hot_sales/Image4.png)"
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
            </div>
        </div>
    </div>
</template>
<style>
 @import '../../../public//frontend/assets/css/cart.css';
 /* @import 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'; */


</style>
<script>
export default{
     data(){
        return{

            shippingFee:20
    }
    },
    created(){
           window.scrollTo(0,0);
        },
  methods:{
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

    incrementValue() {
      this.counter++;
    },
    decrementValue() {
        if(this.counter>1)
      this.counter--;
    },
     deleteFromCart(id)
            {

                this.$store.commit({
                type: 'deleteFromCart',
                id: id,

            })
         }


  },
  computed: {
            // ...mapState([
            //     "cart"
            // ]),
         getCart()
        {
             return this.$store.getters.getCart
        },
        total(){
            return this.$store.getters.getTotal
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
