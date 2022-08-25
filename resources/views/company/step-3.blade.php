@extends('layout.default')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-10">

            <form action="{{ route('company.step.3.post') }}" method="post">

                {{ csrf_field() }}

                <div class="card">

                    <div class="card-header">Business Profile</div>



                    <div class="card-body">
                        @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul>

                                @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                        @endif

                        {{$company}}
                        <label for="companyName">Company Name</label><br>
                        <input type="text" value="{{{ $company->company_name?? '' }}}" class="form-control" name="company_name" id="companyName">
                        <label for="companyaddress">Company Address</label><br>
                        <input type="text" value="{{{ $company->company_address?? '' }}}" class="form-control" name="company_address" id="companyaddress">

                        <label for="companyPhone">Company Phone</label><br>
                        <input type="number" value="{{{ $company->company_phone?? '' }}}" class="form-control" name="company_phone" id="companyPhone">

                        <label for="companyEmail">Company Email</label><br>
                        <input type="email" value="{{{ $company->company_email ?? '' }}}" class="form-control" name="company_email" id="companyEmail">



                    </div>

                    <div class="card-footer">

                        <div class="row">

                            <div class="col-md-6 text-left">

                                <a href="{{ route('company.step.2') }}" class="btn btn-danger pull-right">Previous</a>

                            </div>

                            <div class="col-md-6 text-right">

                                <button type="submit" class="btn btn-primary">Next</button>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection