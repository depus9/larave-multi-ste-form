@extends('layout.default')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('company.step.1.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">Business Details</div>
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
                            <label for="status">Status:</label>
                            <select name="company_status" id="status" class="form-control">
                                <option value="Active" {{$company && $company->company_status == 'Active' ? 'selected' : ''}}>Active</option>
                                <option value="Inactive" {{$company && $company->company_status == 'Inactive' ? 'selected' : ''}}>Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="is-premium">Is Company a Premium Company (with renewal exemption):</label>
                            <input type="checkbox" name="company_is_premium" id="is-premium" value="Premium" {{$company && $company->company_is_premium == 'Premium' ? 'checked' : ''}} />
                        </div>
                        <div class="form-group">
                            <label for="" class="d-block">Accreditation Level:</label>
                            <input type="checkbox" name="accreditation_level[]" id=" level-1" value="Alumi Shield Level 1" {{$company && is_array($company->accreditation_level) && in_array('Alumi Shield Level 1', $company->accreditation_level) ? 'checked' : ''}}>
                            <label>Alumi Shield Level 1</label>
                            <input type="checkbox" name="accreditation_level[]" id="lavel-2" class="ml-3" value="Is Partiallv Accredited" {{$company && is_array($company->accreditation_level) && in_array('Is Partiallv Accredited', $company->accreditation_level) == 'Is Partiallv Accredited' ? 'checked' : ''}}>
                            <label for="lavel-2">Is Partiallv Accredited</label>
                        </div>
                        <div data-app="">
                            <Datetemplate></Datetemplate>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection