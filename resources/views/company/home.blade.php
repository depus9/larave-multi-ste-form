@extends('layout.default')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form>
                @csrf
                <div class="card">
                    <div data-app="">
                        <!-- Vue Form Coponents -->
                        <multi-step-form>
                        </multi-step-form>
                        <!-- Vue Form Components -->
                    </div>
                </div>

            </form>

        </div>

    </div>

</div>

@endsection