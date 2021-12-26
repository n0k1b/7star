<template>
    <div>
          <div class="container breadcrumb space_out_nav">
        <p>7Star > Explore All</p>
        </div>

     <div class="heading ">
        <div class="heading__text container">
            <h1>Explore All</h1>
        </div>
    </div>

           <div class="content container">
        <div class="search_filters">
            <div class="category">
                <h4>Shop By Cateogry</h4>
                <form action="" class="category_form card">

                    <div class="input_item" v-for="category in getAllCategory" :key="category.id">
                        <input type="radio" name="category" @click="selectedCat(category.id)"><label for="" >{{ category.name }}</label>
                    </div>

                </form>
            </div>
            <div class="type mt-subsection">
                <h4>Type</h4>
                <form action="" class="type_form card mt-2">
                    <div class="selectable_badges">
                        <span>Asian</span>
                    </div>
                    <div class="selectable_badges badge_selected">
                        <span>Arabian</span>
                    </div>
                    <div class="selectable_badges">
                        <span>Europian</span>
                    </div>
                    <div class="selectable_badges">
                        <span>American</span>
                    </div>
                    <div class="selectable_badges">
                        <span>African</span>
                    </div>
                    <div class="selectable_badges">
                        <span>Australian</span>
                    </div>
                </form>
            </div>
            <div class="price mt-subsection">
                <h4>Price Range</h4>
                <form action="" class="type_form card mt-2">
                    <div class="selectable_badges">
                        <span>$</span>
                    </div>
                    <div class="selectable_badges badge_selected">
                        <span>$$</span>
                    </div>
                    <div class="selectable_badges">
                        <span>$$$</span>
                    </div>
                </form>
            </div>
            <div class="dietary mt-subsection">
                <h4>Dietary</h4>
                <form action="" class="type_form card mt-2">
                    <div class="selectable_badges">
                        <span><img src="/frontend/assets/img/badge_icons/tomato.svg" alt=""> Vegeterian</span>
                    </div>
                    <div class="selectable_badges">
                        <span><img src="/frontend/assets/img/badge_icons/veg.svg" alt=""> Vegan</span>
                    </div>
                    <div class="selectable_badges">
                        <span><img src="/frontend/assets/img/badge_icons/gluten.svg" alt=""> Gluten Free</span>
                    </div>
                    <div class="selectable_badges">
                        <span><img src="/frontend/assets/img/badge_icons/halal.svg" alt=""> Halal</span>
                    </div>
                    <div class="selectable_badges">
                        <span><img src="/frontend/assets/img/badge_icons/allergy.svg" alt=""> Allergy Friendly</span>
                    </div>
                </form>
            </div>
        </div>
        <div class="products">
                <div class="h_list-4 mt-subsection">


                        <div class="item_card"  v-for="product in products.data" :key="product.id">
                               <router-link :to="{name:'ProductDetails', params:{id:product.id} }">
                            <a href="product_details.html">

                                <div class="thumbnail">
                                    <img height="224px" loading="lazy" style="width:100%"  :src="'/'+product.thumbnail_image">
                                </div>

                                <!-- <div class="thumbnail lazy-background"  :style="{ 'background-image': 'url(/' + product.thumbnail_image + ')' }">
                                    <div class="favourite"></div>
                                </div> -->
                            </a>
                            <a href="product_details.html">
                                <h5>{{ product.name }}</h5>
                            </a>

                            <div class="overview">
                                <div class="star_rating_container">
                                    <div class="star_rating" data-rating=1 data-star_count=5></div>
                                    <div class="label">4.50</div>
                                </div>
                                <p>15 Delivered ({{ product.category_id }})</p>
                            </div>
                            <div class="pricing_container">
                                <div class="price">
                                    <p class="current_price">${{ product.price }}</p>
                                    <!-- <p class="prev_price">$99.50</p> -->
                                </div>
                                <p>Available</p>
                            </div>
                               </router-link>
                            <div class="add_to_cart_button">
                                <button  @click="addToCart(product)" class="btn btn-primary add_to_cart_button"><i class="bi bi-cart-plus-fill"></i> &nbsp; &nbsp; Add to Cart</button>
                            </div>
                        </div>

                    <div class="pagination_div">
                            <pagination align="right" show    :limit="3" :data="products" @pagination-change-page="getResults">
                            <span slot="prev-nav">&laquo;</span>
                            <span slot="next-nav"> &raquo;</span>
                            </pagination>
                    </div>






                </div>

        </div>
    </div>

    </div>

</template>
<style>
 @import '../../../public//frontend/assets/css/shop_page.css';
 /* @import 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css'; */


</style>
<script>
export default {
    name:"products",
    data(){
        return{
            products:{
                    type:Object,
                    default:null
                },
            selectedcategory: '',
    }
    },

     created(){
           window.scrollTo(0,0);
        },

     mounted(){
         this.getResults();

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

           async  getResults(page = 1) {
                await axios.get(`/api/product/`,{
                    params:{
                        page,
                        category_id: this.selectedcategory

                    }
                }).then(({data})=>{
                    this.products = data
                }).catch(({ response })=>{
                    console.error(response)
                })
            //     if (typeof page === 'undefined') {
            //         page = 1;
            //     }

            //  this.$store.dispatch("allProduct",{page:page})

            //this.laravelData = this.$store.getters.getCategoryProductFormGetters
            },
             selectedCat: function (id){
                   this.selectedcategory =id
                   this.getResults()


        },

    },
     computed: {

         getAllCategory(){ //final output from here
            //console.log( this.$store.getters.getCategoryFormGetters+" hello");
            return this.$store.getters.getCategoryFormGetters
        },
         allProduct(){ //final output from here

            return this.$store.getters.getAllProduct
        },
         getAllProduct(){ //final output from here

            return this.$store.getters.getCategoryProductFormGetters
        }


      },

  }
</script>
