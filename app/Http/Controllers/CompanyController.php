<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    protected $company;
    /**

     * Display a listing of the prducts.

     *

     * @return \Illuminate\Http\Response

     */
    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function index()

    {
        $company_profile = Company::all();

        return view('company.index', compact('company_profile'));
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */

    public function createFirstStep(Request $request)

    {

        $company = $request->session()->get('company_profile');



        return view('company.home', compact('company'));
    }



    /**  

     * Post Request to store step1 info in session

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */
    public function postCompanyData(Request $request)

    {
        // var_dump($request->all());
        // die;

        $company = $request->all();
        if (is_array($company['accreditation_level'])) {
            if (count($company['accreditation_level'])) {
                $company['accreditation_level'] = serialize($company['accreditation_level']);
            } else {
                $company['accreditation_level'] = 'undefined';
            }
        }
        if (!$company['company_status']) {
            $company['company_status'] = 'undefined';
        }
        if (!$company['company_is_premium']) {
            $company['company_is_premium'] = 'undefined';
        }



        if ($this->company->create($company)) {
            return response(['status' => "OK"], 200);
        }

        return response(['status' => "ERROR"], 500);



        // return redirect()->route('company.index');
    }  //
}
