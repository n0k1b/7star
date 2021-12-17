export default {
    state: {
        category: [],
        CategoryProduct: []

        // count: 0
    },
    getters: {

        getCategoryProductFormGetters(state) {
            return state.CategoryProduct
        },
        getCategoryFormGetters(state) { //take parameter state

            return state.category
        }
    },
    actions: {

        async allCategoryProduct(context, data) {
            var id = data.id

            await axios.get("/api/category/" + id)

            .then((response) => {

                context.commit("category_products", response.data.product) //categories will be run from mutation

            })

            .catch(() => {

                console.log("Error........")

            })
        },

        allCategoryFromDatabase(context) {
            axios.get("/api/homepage")

            .then((response) => {

                context.commit("categories", response.data.category) //categories will be run from mutation

            })

            .catch(() => {

                console.log("Error........")

            })
        }
    },
    mutations: {

        category_products(state, data) {
            return state.CategoryProduct = data
        },

        categories(state, data) {
            return state.category = data
        },

    }
}