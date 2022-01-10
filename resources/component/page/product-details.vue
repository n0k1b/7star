<template>
        <div class="container space_out_nav">
        <div class="breadcrumb p-2">
            <p>Home > Green Vegetable > <b>Food Details</b></p>
        </div>
        <div class="product_details">
            <div class="images">
                <div class="images__viewer"   :style="{ backgroundImage: `url(/${product.thumbnail_image})` }">

                </div>
                <div class="images__selector">
                    <div class="img match_height img__selected"  ></div>
                    <div class="img match_height" style="background-image: url(/frontend/assets/img/featured_foods/image2.png);"></div>
                    <div class="img match_height" style="background-image: url(/frontend/assets/img/featured_foods/image2.png);"></div>
                </div>
            </div>
            <div class="info">
                <div class="rating">
                    <div class="star_rating_container">
                        <div class="star_rating" data-rating=1 data-star_count=5></div>
                        <div class="label">4.50</div>
                    </div>
                    <p class="bordered_badge">Available Now</p>
                </div>
                <h1>{{ product.name }}</h1>
                <div class="tags mt-1">
                    <p class="badge badge-light_red">Halal Food</p>
                    <p class="badge badge-aqua">Asian</p>
                </div>
                <div class="quantity_selector mt-3">
                    <span>Quantity: </span><button @click="decrease_counter()" class="btn-rounded btn-gray">-</button><span class="product-details-quantity" >{{ counter }}</span><button @click="increase_counter()" class="btn-rounded btn-gray">+</button>
                </div>
                <div class="pricing_container mt-3">
                    <div class="price">
                        <p class="current_price">${{ product.price }}</p>
                        <!-- <p class="prev_price">$99.50</p> -->
                    </div>
                </div>
                <div class="action_buttons">
                    <button @click="addToCart(product)" href="" class="btn btn-primary"><i class="bi bi-cart-plus-fill"></i> Add to Cart</button>
                    <!-- <a href="" class="btn btn-gray"><i class="bi bi-cart-plus-fill"></i> Add to Cart</a> -->
                </div>
                <div class="social">
                    <span>Share: </span>
                    <a href="">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-instagram"></i>
                    </a>


                </div>
            </div>
            <div class="ingredients_and_author">
                <div class="ingredients">
                    <p><b>Ingredients</b></p>
                    <ol>
                        <li>Cucumbers</li>
                        <li>Peppers</li>
                        <li>Tomatoes</li>
                        <li>Onions</li>
                        <li>Carrots</li>
                        <li>Seeds</li>
                        <li>Nuts</li>
                    </ol>
                </div>
                <div class="author">
                    <p><b>Visit your seller</b></p>
                    <div class="avatar-sm" style="background-image: url(/frontend/assets/img/avatar.png);"></div>
                    <p>Seller Name</p>
                    <p>Company Name</p>
                    <a href="" class="btn-2 btn-gray mt-1">Visit</a>
                </div>
            </div>
        </div>
        <div class="reviews mt-4">
            <div class="title mt-section">
                <h2>Reviews For This Item</h2>
                <div class="reviews_container h_list-2 mt-4">
                    <div>
                        <div class="review_card">
                            <div class="author">
                                <div class="avatar-sm" style="background-image: url(/frontend/assets/img/avatar2.png);"></div>
                                <div class="author__details">
                                    <p><b>Dami Soyombo</b></p>
                                    <p>4 days ago</p>
                                </div>
                            </div>
                            <div class="review">
                                <div class="thumbnail_container">

                                    <div class="thumbnail" style="background-image: url(/frontend/assets/img/featured_foods/image.png);"></div>
                                </div>
                                <div class="details">
                                    <p class="item_name"><b>Item: Green vegetable and ricotta tart with parmesan crust</b></p>
                                    <p class="review_text">“The recipes are plentiful, we have enough each meal for our supper and enough leftover for a lunch the next day which is great!</p>
                                    <div class="overview mt-2">
                                        <div class="reacts">
                                            <i class="bi bi-heart-fill"></i>
                                            <p><span>30</span> likes</p>
                                        </div>
                                        <div class="star_rating_container">
                                            <div class="star_rating" data-rating=1 data-star_count=5></div>
                                            <div class="label">4.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="review_card">
                            <div class="author">
                                <div class="avatar-sm" style="background-image: url(/frontend/assets/img/avatar2.png);"></div>
                                <div class="author__details">
                                    <p><b>Dami Soyombo</b></p>
                                    <p>4 days ago</p>
                                </div>
                            </div>
                            <div class="review">
                                <div class="thumbnail_container">

                                    <div class="thumbnail" style="background-image: url(/frontend/assets/img/featured_foods/image2.png);"></div>
                                </div>
                                <div class="details">
                                    <p class="item_name"><b>Item: Green vegetable and ricotta tart with parmesan crust</b></p>
                                    <p class="review_text">“The recipes are plentiful, we have enough each meal for our supper and enough leftover for a lunch the next day which is great!</p>
                                    <div class="overview mt-2">
                                        <div class="reacts">
                                            <i class="bi bi-heart-fill"></i>
                                            <p><span>30</span> likes</p>
                                        </div>
                                        <div class="star_rating_container">
                                            <div class="star_rating" data-rating=1 data-star_count=5></div>
                                            <div class="label">4.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="review_card">
                            <div class="author">
                                <div class="avatar-sm" style="background-image: url(/frontend/assets/img/avatar2.png);"></div>
                                <div class="author__details">
                                    <p><b>Dami Soyombo</b></p>
                                    <p>4 days ago</p>
                                </div>
                            </div>
                            <div class="review">
                                <div class="thumbnail_container">

                                    <div class="thumbnail" style="background-image: url(/frontend/assets/img/featured_foods/image.png);"></div>
                                </div>
                                <div class="details">
                                    <p class="item_name"><b>Item: Green vegetable and ricotta tart with parmesan crust</b></p>
                                    <p class="review_text">“The recipes are plentiful, we have enough each meal for our supper and enough leftover for a lunch the next day which is great!</p>
                                    <div class="overview mt-2">
                                        <div class="reacts">
                                            <i class="bi bi-heart-fill"></i>
                                            <p><span>30</span> likes</p>
                                        </div>
                                        <div class="star_rating_container">
                                            <div class="star_rating" data-rating=1 data-star_count=5></div>
                                            <div class="label">4.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="review_card">
                            <div class="author">
                                <div class="avatar-sm" style="background-image: url(/frontend/assets/img/avatar2.png);"></div>
                                <div class="author__details">
                                    <p><b>Dami Soyombo</b></p>
                                    <p>4 days ago</p>
                                </div>
                            </div>
                            <div class="review">
                                <div class="thumbnail_container">

                                    <div class="thumbnail" style="background-image: url(/frontend/assets/img/featured_foods/image2.png);"></div>
                                </div>
                                <div class="details">
                                    <p class="item_name"><b>Item: Green vegetable and ricotta tart with parmesan crust</b></p>
                                    <p class="review_text">“The recipes are plentiful, we have enough each meal for our supper and enough leftover for a lunch the next day which is great!</p>
                                    <div class="overview mt-2">
                                        <div class="reacts">
                                            <i class="bi bi-heart-fill"></i>
                                            <p><span>30</span> likes</p>
                                        </div>
                                        <div class="star_rating_container">
                                            <div class="star_rating" data-rating=1 data-star_count=5></div>
                                            <div class="label">4.50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="related_items">
            <div class="section_heading">
                <h2>Related Items</h2>
            </div>
            <div class="h_list-4 mt-subsection">
                <div>
                    <div class="item_card">
                        <div class="thumbnail" style="background-image: url(/frontend/assets/img/hot_sales/Image.png)">
                            <div class="favourite"></div>
                        </div>
                        <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                        <div class="overview">
                            <div class="star_rating_container">
                                <div class="star_rating" data-rating=1 data-star_count=5></div>
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
                        <div class="thumbnail" style="background-image: url(/frontend/assets/img/hot_sales/Image2.png)">
                            <div class="favourite"></div>
                        </div>
                        <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                        <div class="overview">
                            <div class="star_rating_container">
                                <div class="star_rating" data-rating=1 data-star_count=5></div>
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
                        <div class="thumbnail" style="background-image: url(/frontend/assets/img/hot_sales/Image3.png)">
                            <div class="favourite"></div>
                        </div>
                        <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                        <div class="overview">
                            <div class="star_rating_container">
                                <div class="star_rating" data-rating=1 data-star_count=5></div>
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
                        <div class="thumbnail" style="background-image: url(/frontend/assets/img/hot_sales/Image4.png)">
                            <div class="favourite"></div>
                        </div>
                        <h5>Green vegetable and ricotta tart with parmesan crust</h5>
                        <div class="overview">
                            <div class="star_rating_container">
                                <div class="star_rating" data-rating=1 data-star_count=5></div>
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
 @import '../../../public//frontend/assets/css/produdct_details.css';
 /* @import 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'; */


</style>

<script>
    export default {
        props:["id"],
         data() {
		return {
			// Our data object that holds the Laravel paginator data
            counter:1

		}
	},
        created(){
           window.scrollTo(0,0);
        },
        mounted()
        {
            this.$store.dispatch("product_details",{id:this.id})
        }
        ,
        methods:{
          increase_counter()
          {
              this.counter++;
          },
          decrease_counter()
          { 
              if(this.counter>1)
              this.counter--
          },
          addToCart(item)
            {
              
                this.$store.commit({
                type: 'addToCart',
                id: item.id,
                name: item.name,
                price: item.price,
                image:item.thumbnail_image,
                quantity:this.counter
            })
            },
        },
         computed: {

        product(){ //final output from here
            return this.$store.getters.getProductDetails
        }
      },
    }
</script>
