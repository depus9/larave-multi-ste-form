@extends('layout.default')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="card">

                <div class="card-header">Company Profile</div>
                <div class="card-body">

                    <a href="{{ route('company.step.1') }}" class="btn btn-primary pull-right">Add Company Profile</a>
                    @if (Session::has('message'))

                    <div class="alert alert-info">{{ Session::get('message') }}</div>

                    @endif

                </div>

            </div>

        </div>

    </div>

</div>

@endsection