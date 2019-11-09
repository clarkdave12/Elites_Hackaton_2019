<template>
    <div class="container">
        <home/>
    </div>
</template>

 <script>

import login from "./Login.vue"
import home from "./Home.vue"
import register from "./Register.vue"
export default {
    components: {
        login,
        home,
        register
    }
}
</script>