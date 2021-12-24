<template>
    <div>
        <header-banner></header-banner>
      <div class="container">

       <popular-categories></popular-categories>

        <!-- Hot Section -->
        <div class="hot_sales mt-section" v-for="section in getSection"  :key="section.id"   >
            <!-- Section Heading -->
            <div class="section_heading">
                <h2>{{ section.name }}</h2>
                <router-link to="/shop-page"> <a href="#" class="btn btn-bordered">Explore All</a></router-link>

            </div>
            <div class="items mt-subsection" >
                <!-- Slider Container -->
                <div class="hot_sales_slider">
                    <vue-glide type="slider"

                 :rewind-duration="0"

                 :per-view="4"
                 :bullet="true"
                >
                <vue-glide-slide  class="block relative py-16 w-full justify-center px-10"  v-for="product in section.product_list.slice(0,15)"  :key="product.id">
                        <div class="item_card"   >
                            <div class="thumbnail">
                                <img :src="'/'+product.product.thumbnail_image" height="224px" loading="lazy" style="width:100%">
                                <div class="favourite"></div>
                            </div>
                            <h5>{{ product.product.name }}</h5>
                            <div class="overview">
                                <div class="star_rating_container">
                                    <div class="star_rating" data-rating=1 data-star_count=5 ></div>
                                    <div class="label">4.50</div>
                                </div>
                                <p>15 Delivered</p>
                            </div>
                            <div class="pricing_container">
                                <div class="price">
                                    <p class="current_price">${{ product.product.price }}</p>

                                </div>
                                <p>Available</p>
                            </div>
                            <div class="add_to_cart_button">
                                <a href="" class="btn btn-primary add_to_cart_button"><i class="bi bi-cart-plus-fill"></i> &nbsp; &nbsp; Add to Cart</a>
                            </div>
                        </div>

                </vue-glide-slide>
                </vue-glide>




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
                        style="background-image: url(/frontend/assets/img/featured_foods/image.png)"
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
                        style="background-image: url(/frontend/assets/img/featured_foods/image2.png)"
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
                        style="background-image: url(/frontend/assets/img/featured_foods/image3.png)"
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
                style="background-image: url(/frontend/assets/img/banner/thumbnail.png);"
            >
                <img src="/frontend/assets/img/banner/logo.png" alt="" height="100px">
                <p>Get 50% <br/> Discount</p>
            </div>
        </div>
        <div class="featured_foods">
            <div class="h_list-3 mt-subsection">
                <div class="item_image_card">
                    <div
                        class="thumbnail"
                        style="background-image: url(/frontend/assets/img/featured_foods/image.png)"
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
                        style="background-image: url(/frontend/assets/img/featured_foods/image2.png)"
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
                        style="background-image: url(/frontend/assets/img/featured_foods/image3.png)"
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
    </div>
</template>
<script>
import { Glide, GlideSlide } from 'vue-glide-js'

export default {
    components: {
      [Glide.name]: Glide,
      [GlideSlide.name]: GlideSlide
    },
      computed: {

        getSection(){ //final output from here
            return this.$store.getters.getSection
        }
      },



  }
</script>
