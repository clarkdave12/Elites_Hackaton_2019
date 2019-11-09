
import LandingPage from './components/LandingPage.vue'
import Register from './components/Register.vue'
import Test from './components/Test.vue'

export const routes = [
    {
        path: '/',
        component: LandingPage
    },
    {
        path: '/test',
        component: Test
    }
]