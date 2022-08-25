@extends('layout.default')



@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-10">

            <form action="{{ route('company.step.2') }}" method="POST">

                @csrf

                <div class="card">

                    <div class="card-header">Key Contacts</div>



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



                        <div class="form-group">

                            <label for="contactName">Contact Person Name*</label><br>
                            <input type="text" class="form-control" name="contact_name" id="contactName" value="{{{ $company->contact_name ?? '' }}}">

                        </div>



                        <div class="form-group">

                            <label for="contactEmail">Contact Person Email*</label>

                            <input type="email" value="{{{ $company->contact_email ?? '' }}}" class="form-control" id="contactEmail" name="contact_email" />

                        </div>
                        <div class="form-group">

                            <label for="contactPhone">Contact Person Phone*</label>

                            <input type="number" value="{{{ $company->contact_phone?? '' }}}" class="form-control" id="contactPhone" name="contact_phone" />

                        </div>



                    </div>

                    <div class="card-footer">

                        <div class="row">

                            <div class="col-md-6 text-left">

                                <a href="{{ route('company.step.1') }}" class="btn btn-danger pull-right">Previous</a>

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