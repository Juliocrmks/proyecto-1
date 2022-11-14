<template>
    <v-card
      class="mx-auto"
      max-width="344"
      variant="outlined"
    >
      <v-card-item>
        <v-btn color="blue-grey" variant="outlined" >Count is: {{ count }}</v-btn>

      </v-card-item>
  
      <v-card-actions>
        <v-btn @click="count++" variant="outlined">
          Count ++
        </v-btn>
      </v-card-actions>
    </v-card>
  </template>
<script>
export default {
    data() {
        return {
            count: 0
        }
    }
}
</script>
