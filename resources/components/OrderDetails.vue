<template>
    <v-card>
        <v-toolbar dark color="primary">
            <v-toolbar-title>Order to Deliver</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items>
                <!-- <v-btn dark text @click="dialog = false">
                Deliver
            </v-btn> -->
            </v-toolbar-items>
        </v-toolbar>
        <v-list lines="two" subheader>
            <v-subheader>Order number: {{order.orderNumber}}</v-subheader>
            <v-list-item title="Invoice Number" :subtitle="order.orderNumber">
            </v-list-item>
            <v-list-item title="Address" subtitle="33 Address Ave 32052">
            </v-list-item>

            <v-divider></v-divider>

            <v-subheader>Materials</v-subheader>
            <v-list-item title="Material1" subtitle="Description">
            </v-list-item>
            <v-list-item title="Material2" subtitle="Description">
            </v-list-item>
            <v-list-item title="Material2" subtitle="Description">
            </v-list-item>

            <v-divider></v-divider>

            <v-subheader>Image Attachments</v-subheader>
            <v-list-item title="Truck Image">
                <v-img src="https://picsum.photos/350/165?random" max-width="300" max-height="125"
                    class="bg-grey-lighten-2"></v-img>
            </v-list-item>
            <v-list-item title="On-site">
                <v-img src="https://picsum.photos/350/165?random" max-width="300" max-height="125"
                    class="bg-grey-lighten-2"></v-img>
            </v-list-item>

        </v-list>
    </v-card>
</template>
<script>
export default {

    data() {
        return {
            orders: [
                {
                    invoiceNumber: 123456,
                    orderNumber: 789456,
                    date: '00/00/0000',
                    status: 'Active'        
                },{
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
                },{
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