<template>
    <v-app>
        <v-container fluid id="bg">
            <router-view></router-view>
        </v-container>
    </v-app>
</template>

<style scoped>
 #bg{
     background-image: linear-gradient(white);
 }
</style>