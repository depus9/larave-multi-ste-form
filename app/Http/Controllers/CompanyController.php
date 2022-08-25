<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**

     * Display a listing of the prducts.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $companys = Company::all();



        return view('company_profile.index', compact('company_profile'));
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */

    public function createStepOne(Request $request)

    {

        $company = $request->session()->get('company_profile');



        return view('company_profile.create-step-one', compact('company_profile'));
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

            'name' => 'required|unique:company_profile',

            'amount' => 'required|numeric',

            'description' => 'required',

        ]);



        if (empty($request->session()->get('company_profile'))) {

            $company = new Company();

            $company->fill($validatedData);

            $request->session()->put('company_profile', $company);
        } else {

            $company = $request->session()->get('company_profile');

            $company->fill($validatedData);

            $request->session()->put('company_profile', $company);
        }



        return redirect()->route('company_profile.create.step.two');
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */

    public function createStepTwo(Request $request)

    {

        $company = $request->session()->get('company_profile');



        return view('company_profile.create-step-two', compact('company_profile'));
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */

    public function postCreateStepTwo(Request $request)

    {

        $validatedData = $request->validate([

            'stock' => 'required',

            'status' => 'required',

        ]);



        $company = $request->session()->get('company_profile');

        $company->fill($validatedData);

        $request->session()->put('company_profile', $company);



        return redirect()->route('company_profile.create.step.three');
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */

    public function createStepThree(Request $request)

    {

        $company = $request->session()->get('company_profile');



        return view('company_profile.create-step-three', compact('company_profile'));
    }



    /**

     * Show the step One Form for creating a new company.

     *

     * @return \Illuminate\Http\Response

     */

    public function postCreateStepThree(Request $request)

    {

        $company = $request->session()->get('company_profile');

        $company->save();



        $request->session()->forget('company_profile');



        return redirect()->route('company_profile.index');
    }  //
}
