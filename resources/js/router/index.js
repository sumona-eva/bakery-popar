import { createRouter, createWebHistory } from 'vue-router'


const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'Home',
      component: () => import('@/pages/fontend/Index.vue')
    },
    {
      path: '/all-products',
      name: 'AllProducts',
      component: () => import('@/pages/fontend/AllProducts/Index.vue')
    },
    {
      path: '/single-product',
      name: 'SingleProducts',
      component: () => import('@/pages/fontend/SingleProduct.vue')
    },
    {
      path: '/add-cart',
      name: 'AddToCart',
      component: () => import('@/pages/fontend/AddToCart.vue')
    },
    {
      path: '/checkout',
      name: 'Checkout',
      component: () => import('@/pages/fontend/Checkout.vue')
    },
    {
      path: '/payment',
      name: 'Payment',
      component: () => import('@/pages/fontend/Payment.vue')
    },
    {
      path: '/login',
      name: 'Login',
      component: () => import('@/pages/Customer/Login.vue')
    },
    {
      path: '/register',
      name: 'Register',
      component: () => import('@/pages/Customer/Register.vue')
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: () => import('@/pages/Dashboard/Index.vue')
    },
    {
      path: '/dashboard/products',
      name: 'Products',
      component: () => import('@/pages/Dashboard/Products.vue')
    },
    {
      path: '/dashboard/category',
      name: 'Category',
      component: () => import('@/pages/Dashboard/Category.vue')
    },
    {
      path: '/dashboard/order',
      name: 'Order',
      component: () => import('@/pages/Dashboard/Order.vue')
    },
    {
      path: '/dashboard/order-area',
      name: 'OrderArea',
      component: () => import('@/pages/Dashboard/OrderArea.vue')
    },
    {
      path: '/dashboard/customer',
      name: 'Customer',
      component: () => import('@/pages/Dashboard/Customer.vue')
    },
    {
      path: '/dashboard/settings',
      name: 'Settings',
      component: () => import('@/pages/Dashboard/Settings.vue')
    },
  ]
})

export default router
