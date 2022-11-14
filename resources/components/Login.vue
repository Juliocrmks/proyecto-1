<template>
        <v-container fluid id="container">
            <v-layout full-height align-center justify-center id="login">
                    <v-card class="elevation-12" min-width="500">
                        <v-toolbar dark color="secondary">
                            <v-toolbar-title>Login form</v-toolbar-title>
                        </v-toolbar>
                        <v-card-text>
                            <v-form>
                                <v-text-field prepend-icon="person" name="login" label="Login" type="text">
                                </v-text-field>
                                <v-text-field id="password" prepend-icon="lock" name="password" label="Password"
                                    type="password"></v-text-field>
                            </v-form>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="primary" to="/">Login</v-btn>
                        </v-card-actions>
                    </v-card>
            </v-layout>
        </v-container>
</template>
 
<script>
export default {
    name: 'Login',
    props: {
        source: String,
    },
};
</script>

<style>
#login {
      align-items: center;
      justify-content: center
  }
#container{
    height: 100%;
}
</style>