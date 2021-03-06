
import LandingPage from './components/LandingPage.vue'
import Register from './components/Register.vue'
import Login from './components/Login.vue'
import Test from './components/Test.vue'
import profile from './components/userprofile.vue'

export const routes = [
    {
        path: '/',
        component: LandingPage
    },
    {
        path: '/test',
        component: Test
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/register',
        component: Register
    },
    {
        path: '/profile',
        component: profile
    }
]