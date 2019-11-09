<template>
    <div class="container-fluid">
        <profile/>
    </div>
</template>

 <script>

import login from "./Login.vue"
import home from "./Home.vue"
import register from "./Register.vue"
import testresource from "./testresources.vue"
import profile from "./profile.vue"
export default {
    components: {
        login,
        home,
        register,
        testresource,
        profile,
    }
}
</script>