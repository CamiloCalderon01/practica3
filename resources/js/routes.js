const Home = () => import('./components/Home.vue');
const Agent = () => import('./components/Agent.vue');
const Customer = () => import('./components/Customer.vue');
const Order = () => import('./components/Order.vue');

export const routes = [
{
    name: 'home',
    path: '/',
    component: Home
},
{
    name: 'agents',
    path: '/agents',
    component: Agent
},
{
    name: 'customers',
    path: '/customers',
    component: Customer
},
{
    name: 'orders',
    path: '/orders',
    component: Order
}
];