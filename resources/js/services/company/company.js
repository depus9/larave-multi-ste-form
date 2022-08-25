import apiService from "../../api-services";

export default class companyServices {
  #api = null;

  constructor() {
    this.#api = "/company_profile/insert-company";
  }
  create(data) {
    let url = `${this.#api}`;
    return apiService.post(url, data);
  }
}
