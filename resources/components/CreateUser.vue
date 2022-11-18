<template>
    <v-card class="mx-auto px-6 py-8" max-width="900">
        <v-layout>
            <v-row>
                <v-col>
                    <v-form v-model="form" @submit.prevent="onSubmit">
                        <v-text-field v-model="clientName" :readonly="loading" class="mb-2" clearable
                            label="Client name">
                        </v-text-field>

                        <v-text-field :type="password" v-model="password" :readonly="loading" clearable
                            label="Paswword"></v-text-field>

                        <br>

                        <v-btn :disabled="!form" :loading="loading" block color="success" size="large" type="submit"
                            variant="elevated">
                            Create User
                        </v-btn>
                    </v-form>
                </v-col>
            </v-row>
        </v-layout>

    </v-card>
</template>

<script>
export default {
    data: () => ({
        form: false,
        clientName: null,
        password: null,
        loading: false,
    }),

    methods: {
        async onSubmit() {
            const response = await axios.post('/user', {
                name: this.clientName,
                password: this.password,
                description: 'This is a user'
            })
            console.log('aaa')
            console.log(response)
            if (!this.form) return

            this.loading = true

            setTimeout(() => (this.loading = false), 2000)
        },
        required(v) {
            return !!v || 'Field is required'
        },
    },
}
</script>s