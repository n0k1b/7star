<template>
<div class="popular_categories">
            <div class="section_heading">
                <h2>Popular Categories</h2>
                <a href="shop_page.html" class="btn btn-bordered">Explore All</a>
            </div>
            <div class="h_list-5 mt-subsection">

                <div class="item centered-flex" v-for="category in getPopularCategory"  :key="category.id">
                    <img :src="category.image" alt="" height="220px" width="220px">
                    <p>{{category.name }}</p>
                </div>

            </div>
        </div>

</template>
<script>
export default{

        computed: {

        getPopularCategory(){ //final output from here
              return this.$store.getters.getCategoryFormGetters.filter(x=>x.popular_status==1)

        }

      },
    };
</script>
