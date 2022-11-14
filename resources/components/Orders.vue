<template>
    <v-container fluid id="container">
        <v-layout full-height align-center justify-center id="login">
            <v-card class="elevation-12" min-width="900">
                <v-toolbar dark color="secondary">
                    <v-toolbar-title> Orders</v-toolbar-title>
                </v-toolbar>
                <v-card-text>
                    <v-icon icon="fa:fas fa-edit" color="blue darken-2"></v-icon>
                    <v-table>
                        <thead>
                            <tr>
                                <th class="text-left">
                                    Invoice #
                                </th>
                                <th class="text-left">
                                    Customer #
                                </th>
                                <th class="text-left">
                                    Date
                                </th>
                                <th class="text-left">
                                    Status
                                </th>
                                <th class="text-left">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in orders" :key="item.invoiceNumber">
                                <td>{{ item.invoiceNumber }}</td>
                                <td>{{ item.orderNumber }}</td>
                                <td>{{ item.date }}</td>
                                <td>{{ item.status }}</td>
                                <td>
                                    <v-dialog v-model="dialog" fullscreen :scrim="false"
                                        transition="dialog-bottom-transition">
                                        <template v-slot:activator="{ props }">
                                            <v-btn color="primary" v-bind="props">
                                                Order Details
                                            </v-btn>
                                        </template>
                                        <v-card>
                                            <v-toolbar dark color="primary">
                                                <v-btn icon dark @click="dialog = false">
                                                    <v-icon>mdi-close</v-icon>
                                                </v-btn>
                                                <v-toolbar-title>Order Details</v-toolbar-title>
                                                <v-spacer></v-spacer>
                                                <v-toolbar-items>
                                                    <!-- <v-btn dark text @click="dialog = false">
                                                        Deliver
                                                    </v-btn> -->
                                                </v-toolbar-items>
                                            </v-toolbar>
                                            <v-list lines="two" subheader>
                                                <v-subheader>Order number: {{item.orderNumber}}</v-subheader>
                                                <v-list-item title="Invoice Number" :subtitle="item.orderNumber">
                                                </v-list-item>
                                                <v-list-item title="Address" subtitle="33 Address Ave 32052">
                                                </v-list-item>

                                                <v-divider></v-divider>

                                                <v-subheader>Materials</v-subheader>
                                                <v-form v-model="form" @submit.prevent="onSubmit">

                                                </v-form>
                                                <v-list-item title="Material1" subtitle="Description">
                                                    
                                                </v-list-item>
                                                <v-list-item title="Material2" subtitle="Description">
                                                </v-list-item>
                                                <v-list-item title="Material2" subtitle="Description">
                                                </v-list-item>

                                                <v-divider></v-divider>

                                                <v-subheader>Image Attachments</v-subheader>
                                                <v-list-item title="Truck Image">
                                                    <v-img src="https://picsum.photos/350/165?random" max-width="300"
                                                        max-height="125" class="bg-grey-lighten-2"></v-img>
                                                </v-list-item>
                                                <v-list-item title="On-site">
                                                    <v-img src="https://picsum.photos/350/165?random" max-width="300"
                                                        max-height="125" class="bg-grey-lighten-2"></v-img>
                                                </v-list-item>

                                            </v-list>
                                            <v-list-item title="Complete Delivery">

                                                <v-btn :disabled="!form" @click="dialog=false" :loading="loading" block
                                                    color="success" size="large" type="submit" variant="elevated">
                                                    Update Order
                                                </v-btn>
                                            </v-list-item>
                                        </v-card>
                                    </v-dialog>
                                </td>
                                <!-- <td><v-icon icon="mdi-vuetify"> </v-icon></td> -->
                            </tr>
                        </tbody>
                    </v-table>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <!-- <v-btn color="primary" to="/">Login</v-btn> -->
                </v-card-actions>
            </v-card>
        </v-layout>
    </v-container>
</template>

<style>
#login {
    align-items: center;
    justify-content: center
}

#container {
    height: 100%;
}
</style>

<script>
export default {
    data() {
        return {
            dialog: false,
            orders: [
                {
                    invoiceNumber: 123456,
                    orderNumber: 789456,
                    date: '00/00/0000',
                    status: 'Active'
                }, {
                    invoiceNumber: 123457,
                    orderNumber: 789456,
                    date: '00/00/0000',
                    status: 'Active'
                },
                {
                    invoiceNumber: 123458,
                    orderNumber: 789456,
                    date: '00/00/0000',
                    status: 'Active'
                },
                {
                    invoiceNumber: 123459,
                    orderNumber: 789456,
                    date: '00/00/0000',
                    status: 'Active'
                },
                {
                    invoiceNumber: 123460,
                    orderNumber: 789456,
                    date: '00/00/0000',
                    status: 'Active'
                },
                {
                    invoiceNumber: 123461,
                    orderNumber: 789456,
                    date: '00/00/0000',
                    status: 'Active'
                }, {
                    invoiceNumber: 123462,
                    orderNumber: 789456,
                    date: '00/00/0000',
                    status: 'Active'
                },

            ],
        }
    },
}
</script>