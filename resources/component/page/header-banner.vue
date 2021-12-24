<template>
     <div class="hero">
        <div class="glider-contain">
            <div class="glider">
                <div :style="{'position':`relative`}" >
                     <img loading="lazy" :src="getBanner[0]" alt="" :style="{'position':`absolute`}" width="100%">
                    <div class="container slide-1" :style="{'position':`relative`}" >
                        <div class="content" :style="{'display':`block`}">
                            <h1>7 Star</h1>
                            <p>Start Food, Start Service</p>
                            <div class="call_to_action">
                                <a href="" class="btn btn-primary">Sign Up</a>
                                <a href="shop_page.html" class="btn btn-accent">Explore All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div :style="{'position':`relative`}">
                    <img loading="lazy" :src="getBanner[1]" alt="" :style="{'position':`absolute`}" width="100%">
                    <div class="container slide-2" :style="{'position':`relative`}">
                        <div class="content" :style="{'display':`block`}" >
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
</template>

<script>
export default{

        computed: {

        getBanner(){ //final output from here
            return this.$store.getters.getBanner
        }
      },
    };
</script>
