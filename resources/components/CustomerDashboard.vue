<template>
    <v-container>
        <v-card class="mx-auto" min-width="900">
            <v-card-item>
                <v-container>
                    <v-row>
                        <v-col>
                            <v-responsive class="mx-auto" max-width="344">
                                <v-text-field label="orderNumber" type="input" hint="Enter your order number to search">
                                </v-text-field>
                            </v-responsive>
                        </v-col>
                        <v-col>
                            <v-responsive class="mx-auto" max-width="344">
                                <v-text-field label="invoiceNumber" type="input"
                                    hint="Enter your invoice number to search"></v-text-field>
                            </v-responsive>
                        </v-col>
                        <v-col>
                            <v-responsive class="mx-auto" max-width="344">
                                <v-btn @click="ordersOpen=true" variant="tonal">
                                    Search
                                </v-btn>
                            </v-responsive>
                        </v-col>
                    </v-row>
                    <v-row justify="end"
                    no-gutters v-if="ordersOpen">
                        <v-btn @click="ordersOpen=false" icon="mdi-heart" color="primary"></v-btn>
                        <Orders></Orders>
                    </v-row>
                </v-container>
            </v-card-item>

            <v-card-actions>

            </v-card-actions>
        </v-card>
    </v-container>

</template>

<script>
import Orders from './Orders.vue'

export default {
    components: {
        Orders
    },
    methods: {
        changebool() {

        }
    },
    data() {
        return {
            ordersOpen: false

        }
    }
}
</script>
