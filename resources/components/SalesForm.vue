<template>
    <v-card class="mx-auto px-6 py-8" max-width="900">
        <v-layout>
            <v-row>
                <v-col>
                    <v-form v-model="form" @submit.prevent="onSubmit">
                        <v-text-field v-model="customerNumber" :readonly="loading" class="mb-2" clearable
                            label="Customer Number">
                        </v-text-field>

                        <v-text-field v-model="address" :readonly="loading" clearable label="Address"></v-text-field>
                        <v-combobox label="Materials" chips v-model="selectedMaterials" :items="materials2" multiple>
                            <!-- <template v-slot:selection="{ attrs, item, selected }">
                                <v-chip v-if="item === Object(item)" v-bind="attrs" 
                                    :input-value="selected" label small>
                                    <span class="pr-2">
                                        {{ item.material }}sada
                                    </span>
                                </v-chip>
                            </template> -->
                            <!-- <template v-slot:item="{ attrs, item, selected }">
                                
                            </template> -->
                        </v-combobox>
                        <br>

                        <v-btn :disabled="!form" :loading="loading" block color="success" size="large" type="submit"
                            variant="elevated">
                            Complete Order
                        </v-btn>
                    </v-form>
                </v-col>
                <v-col>
                    <v-card max-height="800">
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
                            Order number:
                            <v-list-item title="Invoice Number" subtitle="asda">
                            </v-list-item>
                            <v-list-item title="Address" subtitle="33 Address Ave 32052">
                            </v-list-item>

                            <v-divider></v-divider>

                            Materials
                            <v-form v-model="form" @submit.prevent="onSubmit">

                            </v-form>
                            <v-list-item v-for="material in selectedMaterials " :key="material.material"
                                title="Material">
                                {{ material.material }}
                                <v-slider v-model="material.quantity" class="align-center" :step="1" :max="max"
                                    :min="min" hide-details>
                                    <template v-slot:append>
                                        <v-text-field v-model="slider" hide-details single-line density="compact"
                                            type="number" style="width: 70px"></v-text-field>
                                    </template>
                                </v-slider>
                                <v-icon>mdi-close</v-icon>
                            </v-list-item>


                            <v-divider></v-divider>



                        </v-list>
                    </v-card>
                </v-col>
            </v-row>
        </v-layout>

    </v-card>
</template>

<script>
export default {
    data: () => ({
        form: false,
        customerNumber: null,
        address: null,
        loading: false,
        materials: [{ material: 'Wood', quantity: 0 }, { material: 'Metal', quantity: 0 }, { material: 'Glass', quantity: 0 }, { material: 'Marble', quantity: 0 },],
        materials2: ['Wood', 'Metal', 'Marble', 'Glass'],
        selectedMaterials: [],
        min: 0,
        max: 50,
        slider: 40,
    }),

    methods: {
        async onSubmit() {
            if (!this.form) return

            this.loading = true

            setTimeout(() => (this.loading = false), 2000)
            // const response = await axios.get('/invoice', {
            //     client_id: 1,
            //     delivery_address: 'Address',
            //     materials: [{
            //         material_id: 1,
            //         amount: 2
            //     }, {
            //         material_id: 2,
            //         amount: 3
            //     }, {
            //         material_id: 5,
            //         amount: 6
            //     },]
            // });
            const response = await axios.get(`/invoice`,{id:1} )
        },
        required(v) {
            return !!v || 'Field is required'
        },
    },
}
</script>