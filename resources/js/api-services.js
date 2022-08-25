import Vue from "vue";
import axios from "axios";
import { API_URL } from "./config/config";

/**
 * Service to call HTTP request via Axios
 */
const ApiService = {
  init() {
    Vue.use(axios);
    axios.defaults.baseURL = API_URL;
  },

  post(resource, params) {
    console.log(resource);
    return axios.post(resource, params);
  },
};

export default ApiService;
