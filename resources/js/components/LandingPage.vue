<template>
    <div class="container">
        <login/>
    </div>
</template>

 <script>

import login from "./Login.vue"
import home from "./Home.vue"
export default {
    components: {
        login,
        home,
    }
}
</script>