import Homepage from '../component/page/homepage'
import RestaurantRoom from '../component/page/restaurant-room'
import ShopPage from '../component/page/shop-page'
import ProductDetails from '../component/page/product-details'
import SectionExplore from '../component/page/section-explore'
import cart from '../component/page/cart'
export const routes = [{
        path: '/',
        name: 'Home',
        component: Homepage
    },
    {
        path: "/restaurant-room/:id",
        name: 'RestaurantRoom',
        component: RestaurantRoom,
        props: true,
    },

    {
        path: '/shop-page',
        name: 'ShopPage',
        component: ShopPage
    },

    {
        path: '/cart',
        name: 'cart',
        component: cart
    },
    {
        path: '/product-details/:id',
        name: 'ProductDetails',
        component: ProductDetails,
        props: true,

    },

    {
        path: '/section-explore/:id',
        name: 'SectionExplore',
        component: SectionExplore,
        props: true,

    },



]
export default routes;
