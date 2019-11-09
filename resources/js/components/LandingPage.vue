<template>
    <div class="container-fluid">
        <testresource/>
    </div>
</template>

 <script>

import login from "./Login.vue"
import home from "./Home.vue"
import register from "./Register.vue"
import testresource from "./testresources.vue"
export default {
    components: {
        login,
        home,
        register,
        testresource,
    }
}
</script>