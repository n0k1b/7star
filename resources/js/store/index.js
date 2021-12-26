export default {
    state: {
        category: [],
        CategoryProduct: [],
        product: [],
        cart: [],
        loading: false,
        banner: [],
        popular_category: [],
        section: [],
        product_details: [],
        section_product: [],

        // count: 0
    },
    getters: {

        getCart: (state) => {
            return state.cart
        },

        cartSize: (state) => {
            return state.cart.length;
        },
        cartTotalAmount: (state) => {
            return state.cart.reduce((total, product) => {
                return total + (product.price * product.quantity);
            }, 0);
        },
        getCategoryProductFormGetters(state) {
            return state.CategoryProduct
        },
        getCategoryFormGetters(state) { //take parameter state

            return state.category
        },
        getLoadingState(state) {
            return state.loading
        },
        getAllProduct(state) {
            return state.product
        },
        getBanner(state) {
            return state.banner
        },
        getSection(state) {
            return state.section
        },
        getProductDetails(state) {
            return state.product_details
        },
        getSectionProduct(state) {
            return state.section_product
        }


    },
    actions: {

        async allCategoryProduct(context, data) {
            var id = data.id
            var page = data.page
            this.loading = true
            await axios.get("/api/category/" + id + '?page=' + page)

            .then((response) => {

                context.commit("category_products", response.data) //categories will be run from mutation

            })

            .catch(() => {

                    console.log("Error........")

                })
                .finally(() => {
                    context.commit('loadingStatus', false)
                })
        },

        async sectionProduct(context, data) {
            var id = data.id
            var page = data.page
            this.loading = true
            await axios.get("/api/sectionProduct/" + id + '?page=' + page)

            .then((response) => {

                context.commit("sectionProduct", response.data) //categories will be run from mutation

            })

            .catch(() => {

                    console.log("Error........")

                })
                .finally(() => {
                    context.commit('loadingStatus', false)
                })
        },



        async allProduct(context, data) {
            var page = data.page
            this.loading = true
            await axios.get("/api/product?page=" + page)

            .then((response) => {

                context.commit("allproduct", response.data) //categories will be run from mutation

            })

            .catch(() => {

                    console.log("Error........")

                })
                .finally(() => {
                    context.commit('loadingStatus', false)
                })
        },

        async product_details(context, data) {
            var id = data.id
            this.loading = true
            await axios.get("/api/product/" + id)

            .then((response) => {

                context.commit("product_details", response.data) //categories will be run from mutation

            })

            .catch(() => {

                    console.log("Error........")

                })
                .finally(() => {
                    context.commit('loadingStatus', false)
                })
        },

        allCategoryFromDatabase(context) {
            axios.get("/api/homepage")

            .then((response) => {

                context.commit("categories", response.data.category) //categories will be run from mutation
                context.commit("banner", response.data.banner)
                context.commit("section", response.data.section)

            })

            .catch(() => {

                console.log("Error........")

            })

        }
    },
    mutations: {
        addToCart: (state, item) => {
            let found = state.cart.find(product => product.id == item.id);
            if (found) {
                found.quantity++;
            } else {
                state.cart.push({
                    id: item.id,
                    price: item.price,
                    quantity: 1,
                    image: item.image,
                    name: item.name
                })

            }
            //console.log(product)
            //find the product in the products list
            // let product = state.products.find((product) => product.id === productId);
            // //find the product in the cart list
            // let cartProduct = state.cart.find((product) => product.id === productId);

            // if (cartProduct) {
            //     //product already present in the cart. so increase the quantity
            //     cartProduct.quantity++;
            // } else {
            //     state.cart.push({
            //         // product newly added to cart
            //         ...product,
            //         stock: product.quantity,
            //         quantity: 1,
            //     });
            // }
            // //reduce the quantity in products list by 1
            // product.quantity--;
        },
        removeFromCart: (state, item) => {
            //find the product in the products list
            //find the product in the cart list
            let cartProduct = state.cart.find((product) => product.id === productId);

            cartProduct.quantity--;
            //Add back the quantity in products list by 1
            product.quantity++;
        },
        deleteFromCart: (state, item) => {
            //find the product in the products list
            // let product = state.products.find((product) => product.id === productId);
            // //find the product index in the cart list
            // let cartProductIndex = state.cart.findIndex((product) => product.id === productId);
            // //srt back the quantity of the product to intial quantity
            // product.quantity = state.cart[cartProductIndex].stock;
            // // remove the product from the cart
            // state.cart.splice(cartProductIndex, 1);
            let position = state.cart.findIndex(product => product.id === item.id);

            state.cart.splice(position, 1);
        },
        // addToCart(state, payload) {
        //     return state.cart.push(payload)
        // },
        category_products(state, data) {
            return state.CategoryProduct = data
        },

        categories(state, data) {
            return state.category = data
        },
        section(state, data) {
            return state.section = data
        },
        banner(state, data) {
            return state.banner = data
        },

        loadingStatus(state, newLoadingStatus) {
            state.loading = newLoadingStatus
        },

        sectionProduct(state, data) {

            return state.section_product = data
        },

        allproduct(state, data) {
            return state.product = data
        },
        product_details(state, data) {
            return state.product_details = data
        }


    }
}