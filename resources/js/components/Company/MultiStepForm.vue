<template>
  <v-row>
    <v-col lg="12">
      <v-stepper v-model="step">
        <v-stepper-header v-if="step < 5">
          <v-stepper-step step="1">&nbsp; Business Details </v-stepper-step>

          <v-divider></v-divider>

          <v-stepper-step step="2">&nbsp; Kev Contacts </v-stepper-step>

          <v-divider></v-divider>

          <v-stepper-step step="3">&nbsp; Business Profile </v-stepper-step>

          <v-divider></v-divider>

          <v-stepper-step step="4">&nbsp; Business summar </v-stepper-step>
        </v-stepper-header>

        <v-stepper-items>
          <v-stepper-content step="1">
            <!-- Select Status -->
            <v-select
              v-model="company.company_status"
              :items="items"
              label="Status"
              single-line
              solo
            ></v-select>

            <!-- Select Status -->
            <!-- Premium -->
            <v-checkbox
              v-model="company.company_is_premium"
              label="Is Company a Premium Company (with renewal exemption):"
              value="Premium"
              name="company_is_premium"
            ></v-checkbox>
            <!-- Premium -->
            <v-row>
              <v-col lg="3">
                <v-checkbox
                  v-model="company.accreditation_level"
                  label="Alumi Shield Level 1"
                  value="Alumi Shield Level 1"
                  name="accreditation_level[]"
                ></v-checkbox>
              </v-col>
              <v-col lg="3">
                <v-checkbox
                  v-model="company.accreditation_level"
                  label="Is Partiallv Accredited"
                  value="Is Partiallv Accredited"
                  name="accreditation_level[]"
                ></v-checkbox>
              </v-col>
              <!--datepicker started -->
              <v-col cols="12" lg="12">
                <label>Registration Date *:</label>
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
                      v-model="company.company_register_date"
                      v-bind="attrs"
                      class=""
                      v-on="on"
                      name="company_register_date"
                      :error="$v.company.company_register_date.$error"
                    ></v-text-field>
                  </template>
                  <v-date-picker
                    v-model="company.company_register_date"
                    no-title
                    @input="menu1 = false"
                  ></v-date-picker>
                </v-menu>
                <span
                  style="color: red"
                  v-if="$v.company.company_register_date.$error"
                  >This field is required</span
                >
              </v-col>
              <!-- Two-->
              <v-col cols="12" lg="12">
                <label>Expiry Date *:</label>
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
                      class=""
                      v-model="company.company_expiry_date"
                      readonly
                      v-bind="attrs"
                      :error="$v.company.company_expiry_date.$error"
                      v-on="on"
                      name="company_expiry_date"
                    ></v-text-field>
                  </template>
                  <v-date-picker
                    v-model="company.company_expiry_date"
                    no-title
                    @input="menu2 = false"
                  ></v-date-picker>
                </v-menu>
                <span
                  style="color: red"
                  v-if="$v.company.company_expiry_date.$error"
                  >This field is required</span
                >
              </v-col>
              <!-- three -->
              <v-col cols="12" lg="12">
                <label>Start Renewal Date *:</label>
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
                      class=""
                      v-model="company.company_renewal_date"
                      readonly
                      v-on="on"
                      name="company_renewal_date"
                      :error="$v.company.company_renewal_date.$error"
                    ></v-text-field>
                  </template>
                  <v-date-picker
                    v-model="company.company_renewal_date"
                    no-title
                    @input="menu3 = false"
                  ></v-date-picker>
                </v-menu>
                <span
                  style="color: red"
                  v-if="$v.company.company_renewal_date.$error"
                  >This field is required</span
                >
              </v-col>
            </v-row>
            <v-row>
              <v-col>
                <v-btn dark color="primary" class="mt-3" @click="stepFirst">
                  Next
                </v-btn>
              </v-col>
            </v-row>
          </v-stepper-content>

          <v-stepper-content step="2">
            <v-text-field
              v-model="company.contact_name"
              label="Contact Name*"
              name="contact_name"
              :error="$v.company.contact_name.$error"
              required
            ></v-text-field>
            <span style="color: red" v-if="$v.company.contact_name.$error"
              >This field is required</span
            >
            <v-text-field
              v-model="company.contact_email"
              label="Contact Email*"
              name="contact_email"
              :error="$v.company.contact_email.$error"
              required
            ></v-text-field>
            <span style="color: red" v-if="$v.company.contact_email.$error"
              >This field is required</span
            >
            <v-text-field
              v-model="company.contact_phone"
              label="Contact Phone*"
              name="contact_phone"
              :error="$v.company.contact_phone.$error"
              required
            ></v-text-field>
            <span style="color: red" v-if="$v.company.contact_phone.$error"
              >This field is required</span
            >
            <v-row>
              <v-col>
                <v-btn dark @click="step = 1" color="warning">Previous</v-btn>
                <v-btn dark color="primary" @click="stepSecond">
                  Continue
                </v-btn>
              </v-col>
            </v-row>
          </v-stepper-content>

          <v-stepper-content step="3">
            <v-text-field
              v-model="company.company_name"
              label="Company Name*"
              name="company_name"
              :error="$v.company.company_name.$error"
              required
            ></v-text-field>
            <span style="color: red" v-if="$v.company.company_name.$error"
              >This field is required</span
            >
            <v-text-field
              v-model="company.company_address"
              label="Company Address*"
              name="company_address"
              :error="$v.company.company_address.$error"
              required
            ></v-text-field>
            <span style="color: red" v-if="$v.company.company_address.$error"
              >This field is required</span
            >
            <v-text-field
              v-model="company.company_email"
              label="Company Email*"
              name="company_email"
              :error="$v.company.company_email.$error"
              required
            ></v-text-field>
            <span style="color: red" v-if="$v.company.company_email.$error"
              >This field is required</span
            >
            <v-text-field
              v-model="company.company_phone"
              label="Company Phone*"
              name="company_phone"
              :error="$v.company.company_phone.$error"
              required
            ></v-text-field>
            <span style="color: red" v-if="$v.company.company_phone.$error"
              >This field is required</span
            >
            <v-row>
              <v-col>
                <v-btn dark @click="step = 2" color="warning">Previous</v-btn>
                <v-btn dark color="primary" @click="stepThird">
                  Continue
                </v-btn>
              </v-col>
            </v-row>
          </v-stepper-content>

          <v-stepper-content step="4">
            <v-simple-table>
              <template v-slot:default>
                <tbody>
                  <tr>
                    <th>Status</th>
                    <td>
                      {{
                        company.company_status
                          ? company.company_status
                          : "Inactive"
                      }}
                    </td>
                  </tr>
                  <tr>
                    <th>Is Company a Premium</th>
                    <td>
                      {{
                        company.company_is_premium
                          ? company.company_is_premium
                          : "Non Premium"
                      }}
                    </td>
                  </tr>
                  <tr>
                    <th>Accreditation Level:</th>
                    <td>
                      {{
                        company.accreditation_level.length
                          ? company.accreditation_level
                          : "Level Not defined"
                      }}
                    </td>
                  </tr>
                  <tr>
                    <th>Registration</th>
                    <td>{{ company.company_register_date }}</td>
                  </tr>
                  <tr>
                    <th>Expiry</th>
                    <td>{{ company.company_expiry_date }}</td>
                  </tr>
                  <tr>
                    <th>Renewal Date</th>
                    <td>{{ company.company_renewal_date }}</td>
                  </tr>
                  <tr>
                    <th>Contact Name</th>
                    <td>{{ company.contact_name }}</td>
                  </tr>
                  <tr>
                    <th>Contact Email</th>
                    <td>{{ company.contact_email }}</td>
                  </tr>
                  <tr>
                    <th>Contact Phone</th>
                    <td>{{ company.contact_phone }}</td>
                  </tr>
                  <tr>
                    <th>Company Name</th>
                    <td>{{ company.company_name }}</td>
                  </tr>
                  <tr>
                    <th>Company Email</th>
                    <td>{{ company.company_email }}</td>
                  </tr>
                  <tr>
                    <th>Company Address</th>
                    <td>{{ company.company_address }}</td>
                  </tr>
                  <tr>
                    <th>Company Phone</th>
                    <td>{{ company.company_phone }}</td>
                  </tr>
                </tbody>
              </template>
            </v-simple-table>
            <v-btn dark @click="step = 3" color="warning">Previous</v-btn>
            <v-btn color="primary" dark @click="submit"> Submit </v-btn>
          </v-stepper-content>
        </v-stepper-items>
        <v-row v-if="step == 5">
          <v-col>
            <v-alert dense prominent class="m-3" type="success"
              >Data added successfully</v-alert
            >
          </v-col>
        </v-row>
      </v-stepper>
    </v-col>
  </v-row>
</template>

<script>
import { validationMixin } from "vuelidate";
import { required, maxLength, email, numeric } from "vuelidate/lib/validators";
import companyServices from "../../services/company/company";

const companyApi = new companyServices();

export default {
  mixins: [validationMixin],
  validations: {
    company: {
      company_register_date: { required },
      company_expiry_date: { required },
      company_renewal_date: { required },
      company_status: { required },
      contact_name: { required },
      contact_email: { required, email },
      contact_phone: { required, numeric },
      company_name: { required },
      company_address: { required },
      company_email: { required, email },
      company_phone: { required, numeric },
    },
  },
  data: () => ({
    step: 1,
    valid: true,
    menu1: false,
    menu2: false,
    menu3: false,
    company: {
      company_status: "",
      accreditation_level: [],
      company_is_premium: "",
      company_register_date: "",
      company_expiry_date: "",
      company_renewal_date: "",
      contact_name: "",
      contact_email: "",
      contact_phone: "",
      company_name: "",
      company_address: "",
      company_email: "",
      company_phone: "",
    },
  }),

  methods: {
    stepFirst() {
      this.$v.company.company_renewal_date.$touch();
      this.$v.company.company_expiry_date.$touch();
      this.$v.company.company_register_date.$touch();
      if (
        this.$v.company.company_renewal_date.$invalid ||
        this.$v.company.company_expiry_date.$invalid ||
        this.$v.company.company_register_date.$invalid
      ) {
        return false;
      } else {
        return (this.step = 2);
      }
    },

    stepSecond() {
      this.$v.company.contact_name.$touch();
      this.$v.company.contact_email.$touch();
      this.$v.company.contact_phone.$touch();

      if (
        this.$v.company.contact_name.$invalid ||
        this.$v.company.contact_email.$invalid ||
        this.$v.company.contact_phone.$invalid
      ) {
        return false;
      } else {
        return (this.step = 3);
      }
    },

    stepThird() {
      this.$v.company.company_name.$touch();
      this.$v.company.company_email.$touch();
      this.$v.company.company_phone.$touch();
      this.$v.company.company_address.$touch();
      if (
        this.$v.company.company_name.$invalid ||
        this.$v.company.company_address.$invalid ||
        this.$v.company.company_email.$invalid ||
        this.$v.company.company_phone.$invalid
      ) {
        return false;
      } else {
        return (this.step = 4);
      }
    },
    submit() {
      companyApi
        .create(this.company)
        .then((response) => {
          this.step = 5;
        })
        .catch((err) => {
          alert("Error");
        })
        .finally(() => {});
    },
  },
  computed: {
    items() {
      return ["Active", "Inactive"];
    },
  },
};
</script>
