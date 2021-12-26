<template>
        <div>

        <div class="container mt-section">
            <!-- Section Halal Foods -->
            <div class="halal_foods">
                <div class="section_heading" :style="{'margin-top':200+'px'}">
                    <h2>Explore All</h2>
                </div>


               <div class="spin_loading">
                    <scale-loader :loading='loading'></scale-loader>
               </div>
                <div class="h_list-4 mt-subsection">




                        <div class="item_card"  v-for="product in sectionProduct.data" :key="product.id">
                            <router-link :to="{name:'ProductDetails', params:{id:product.id} }">
                            <a href="product_details.html">

                                <div class="thumbnail">
                                    <img height="224px" loading="lazy" style="width:100%"  :src="'/'+product.product.thumbnail_image">
                                </div>

                                <!-- <div class="thumbnail lazy-background"  :style="{ 'background-image': 'url(/' + product.thumbnail_image + ')' }">
                                    <div class="favourite"></div>
                                </div> -->
                            </a>
                            <a href="product_details.html">
                                <h5>{{ product.product.name }}</h5>
                            </a>

                            <div class="overview">
                                <div class="star_rating_container">
                                    <div class="star_rating" data-rating=1 data-star_count=5></div>
                                    <div class="label">4.50</div>
                                </div>
                                <p>15 Delivered</p>
                            </div>
                            <div class="pricing_container">
                                <div class="price">
                                    <p class="current_price">${{ product.product.price }}</p>
                                    <!-- <p class="prev_price">$99.50</p> -->
                                </div>
                                <p>Available</p>
                            </div>
                            </router-link>
                            <div class="add_to_cart_button">
                                <button @click="addToCart(product.product)" class="btn btn-primary add_to_cart_button"><i class="bi bi-cart-plus-fill"></i> &nbsp; &nbsp; Add to Cart</button>
                            </div>
                        </div>





                </div>
                <div class="pagination_div" v-bind:style="{'width':width}">
                     <pagination :limit=6 :data="sectionProduct" @pagination-change-page="getResults">
                     <span slot="prev-nav">&laquo;</span>
	                 <span slot="next-nav"> &raquo;</span>
                 </pagination>
                </div>

            </div>

            <!-- Section Popular Categories -->
            <div class="popular_categories">
                <div class="section_heading">
                    <h2>Popular Categories</h2>
                    <a href="" class="btn btn-bordered">Explore All</a>
                </div>
                <div class="h_list-5 mt-subsection">
                    <div class="item centered-flex">
                        <img src="/frontend/assets/img/popular_categories/Ellipse 4.png" alt="" height="220px" width="220px">
                        <p>Halal</p>
                    </div>
                    <div class="item centered-flex">
                        <img src="/frontend/assets/img/popular_categories/Ellipse 5.png" alt="" height="220px" width="220px">
                        <p>Vegetable</p>
                    </div>
                    <div class="item centered-flex">
                        <img src="/frontend/assets/img/popular_categories/Ellipse 6.png" alt="" height="220px" width="220px">
                        <p>Rice</p>
                    </div>
                    <div class="item centered-flex">
                        <img src="/frontend/assets/img/popular_categories/Ellipse 7.png" alt="" height="220px" width="220px">
                        <p>Chicken</p>
                    </div>
                    <div class="item centered-flex">
                        <img src="/frontend/assets/img/popular_categories/Ellipse 8.png" alt="" height="220px" width="220px">
                        <p>Burger</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

export default {
    props:["id"],

    data() {
		return {
			// Our data object that holds the Laravel paginator data
			laravelData: {},
            loading,
            width:'600px'

		}
	},

    created(){
           window.scrollTo(0,0);
        },
    watch:{
        $route(to,from)
        {
              this.getResults()
              this.loading = this.getLoadingState()
    // this.$store.dispatch("allCategoryProduct",{id:this.id})

        }
    }
    ,
    mounted() {
        this.getResults();
         this.loading = this.getLoadingState()


    },
    methods:{
            addToCart(item)
            {
                this.$store.commit({
                type: 'addToCart',
                id: item.id,
                name: item.name,
                price: item.price,
                image:item.thumbnail_image
            })
            },

            getResults(page = 1) {
            this.$store.dispatch("sectionProduct",{id:this.id,page:page})
            //this.laravelData = this.$store.getters.getCategoryProductFormGetters

            },
             getLoadingState(){ //final output from here

            return this.$store.getters.getLoadingState;
        }

    },

    computed: {



        sectionProduct(){ //final output from here

            return this.$store.getters.getSectionProduct
        }
      },


  }
</script>


