import Homepage from '../component/page/homepage'
import RestaurantRoom from '../component/page/restaurant-room'
import ShopPage from '../component/page/shop-page'
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

]
export default routes;