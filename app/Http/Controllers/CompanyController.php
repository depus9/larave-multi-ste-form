<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    /**

     * Display a listing of the prducts.

     *

     * @return \Illuminate\Http\Response

     */

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

    public function createStepOne(Request $request)

    {

        $company = $request->session()->get('company_profile');



        return view('company.step-1', compact('company'));
    }



    /**  

     * Post Request to store step1 info in session

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function postCreateStepOne(Request $request)

    {

        $validatedData = $request->validate([

            'company_is_premium' => '',


            'company_status' => '',

            'accreditation_level' => '',
            'company_register_date' => 'required',
            'company_expiry_date' => 'required',
            'company_renewal_date' => 'required'

        ]);



        if (empty($request->session()->get('company_profile'))) {

            $company = new Company();


            $company->fill($validatedData);

            $request->session()->put('company_profile', $company);
        } else {
            $isChecked = $request->has('company_is_premium');
            $company = $request->session()->get('company_profile');
            if (!$request->has('company_is_premium')) {
                $company->company_is_premium = '';
            }

            if (!$request->has('accreditation_level')) {
                $company->accreditation_level = array();
            }
            $company->fill($validatedData);

            $request->session()->put('company_profile', $company);
        }



        return redirect()->route('company.step.2');
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */

    public function createStepTwo(Request $request)

    {

        $company = $request->session()->get('company_profile');



        return view('company.step-2', compact('company'));
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */

    public function postCreateStepTwo(Request $request)

    {

        $validatedData = $request->validate([

            'contact_name' => 'required',

            'contact_email' => 'required|email',
            'contact_phone' => 'required:numerical',

        ]);



        $company = $request->session()->get('company_profile');

        $company->fill($validatedData);

        $request->session()->put('company_profile', $company);



        return redirect()->route('company.step.3');
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */

    public function createStepThree(Request $request)

    {

        $company = $request->session()->get('company_profile');



        return view('company.step-3', compact('company'));
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */
    public function postCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([

            'company_name' => 'required',
            'company_email' => 'required|email',
            'company_phone' => 'required:numerical',
            'company_address' => 'required',

        ]);



        $company = $request->session()->get('company_profile');

        $company->fill($validatedData);

        $request->session()->put('company_profile', $company);
        //redirect to final step
        return redirect()->route('company.step.4');
    }
    /**
     * Step 4
     */
    public function createStepFour(Request $request)

    {

        $company = $request->session()->get('company_profile');



        return view('company.step-4', compact('company'));
    }
    public function postCreateStepFour(Request $request)

    {

        $company = $request->session()->get('company_profile');
        if (is_array($company->accreditation_level)) {
            $company->accreditation_level = serialize($company->accreditation_level);
        }


        $company->save();



        $request->session()->forget('company_profile');



        return redirect()->route('company.index');
    }  //
}
