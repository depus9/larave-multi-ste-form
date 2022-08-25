@extends('layout.default')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-10">

            <form action="{{ route('company.step.4.post') }}" method="post">

                {{ csrf_field() }}
                {{$company}}

                <div class="card">

                    <div class="card-header">Business Summary</div>
                    <h2>Business Details</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Status</th>
                                <th scope="col">Premium</th>
                                <th scope="col">Accreditation Level</th>
                                <th scope="col">Registration Date</th>
                                <th scope="col">Expiry Date</th>
                                <th>Start Renewal Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{$company->company_status}}</th>

                                <td>{{$company->company_is_premium}}</td>
                                <td></td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <th scope="row">1</th>
                            </tr>
                        </tbody>
                    </table>
                    <h2>Key Contacs</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>Business Profile</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>


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

                    </div>

                    <div class="card-footer">

                        <div class="row">

                            <div class="col-md-6 text-left">

                                <a href="{{ route('company.step.2') }}" class="btn btn-danger pull-right">Previous</a>

                            </div>

                            <div class="col-md-6 text-right">

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection