import Vue from "vue";
import axios from "axios";
import { APIURL } from "./config/config";

/**
 * Request Axios
 */
const ApiService = {
  init() {
    Vue.use(axios);
    axios.defaults.baseURL = APIURL;
  },

  post(resource, params) {
    console.log(resource);
    return axios.post(resource, params);
  },
};

export default ApiService;
