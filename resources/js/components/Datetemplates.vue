<template>
  <v-row>
    <v-col cols="12" lg="12">
      <v-menu
        ref="menu1"
        v-model="menu1"
        :close-on-content-click="false"
        transition="scale-transition"
        offset-y
        max-width="290px"
        min-width="auto"
      >
        <template v-slot:activator="{ on, attrs }">
          <v-text-field
            v-model="companyRegisterDate"
            v-bind="attrs"
            class="form-control"
            v-on="on"
            name="company_register_date"
          ></v-text-field>
        </template>
        <v-date-picker
          v-model="companyRegisterDate"
          no-title
          @input="menu1 = false"
        ></v-date-picker>
      </v-menu>
    </v-col>
    <!-- Two-->
    <v-col cols="12" lg="12">
      <v-menu
        v-model="menu2"
        :close-on-content-click="false"
        transition="scale-transition"
        offset-y
        max-width="290px"
        min-width="auto"
      >
        <template v-slot:activator="{ on, attrs }">
          <v-text-field
            class="form-control"
            v-model="companyExpiryDate"
            readonly
            v-bind="attrs"
            v-on="on"
            name="company_expiry_date"
          ></v-text-field>
        </template>
        <v-date-picker
          v-model="companyExpiryDate"
          no-title
          @input="menu2 = false"
        ></v-date-picker>
      </v-menu>
    </v-col>
    <!-- three -->
    <v-col cols="12" lg="12">
      <v-menu
        v-model="menu3"
        :close-on-content-click="false"
        transition="scale-transition"
        offset-y
        max-width="290px"
        min-width="auto"
      >
        <template v-slot:activator="{ on, attrs }">
          <v-text-field
            value="abc"
            class="form-control"
            v-model="companyRenewalDate"
            readonly
            v-bind="attrs"
            v-on="on"
            name="company_renewal_date"
          ></v-text-field>
        </template>
        <v-date-picker
          v-model="companyRenewalDate"
          no-title
          @input="menu3 = false"
        ></v-date-picker>
      </v-menu>
    </v-col>
  </v-row>
</template>
<script>
export default {
  data: (vm) => ({
    companyRenewalDate: "",
    companyExpiryDate: "",
    companyRegisterDate: "",
    menu1: false,
    menu2: false,
    menu3: false,
  }),
};
</script>
