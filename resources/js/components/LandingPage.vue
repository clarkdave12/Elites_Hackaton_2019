<template>
    <div class="container-fluid">
        <!-- <v-container>
        <div class="row">
            <div class="col-lg-4">
                <h2>user name</h2>
                <v-divider></v-divider>
            </div>
        </div>
    </v-container> --> 
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
        profile
    }
} 
</script>



