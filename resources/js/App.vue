<template>
    <v-app class="mx-auto">

        <v-layout>
            <v-app-bar color="primary" density="compact">
                <template v-slot:prepend>
                    <v-app-bar-nav-icon></v-app-bar-nav-icon>
                </template>

                <v-app-bar-title>Halcon</v-app-bar-title>
                <v-btn v-for="route in routes" variant="outlined" color="secondary">
                    <router-link :to="`${route.path}`">{{route.name}} </router-link>

                </v-btn>
                <template v-slot:append>
                    <v-btn icon="mdi-dots-vertical"></v-btn>
                </template>
            </v-app-bar>
            <v-main>
                <v-card height="100%">
                    <v-container id="container">
                        <RouterView></RouterView>
                    </v-container>
                </v-card>

            </v-main>

        </v-layout>
    </v-app>
</template>

<script>
export default {
    data() {
        return {
            routes: [
                { path: '/', name: 'dashboard' },
                { path: '/about', name: 'about' },
                { path: '/login', name: 'login' },
                { path: '/ActiveOrders', name: 'Orders' },
                { path: '/DeliveryRoutes', name: 'DeliveryRoutes' },
                { path: '/SalesForm', name: 'SalesForm' },
                { path: '/CreateUser', name: 'CreateUser' },



            ]
        }

    },
    mounted() {
        console.log('atra', this.routes)
    }
}
</script>

<style>
#container {
    height: 100%;
}
</style>