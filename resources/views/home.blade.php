@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<div class="div"></div>
=======
<<<<<<< HEAD
<div class="div"></div>
=======
>>>>>>> 3c6977465cb0aafdf801a32ab46d9396d3dee5c4
>>>>>>> 076bf8cae2c9edb498a16eb68947049348053cb3
@endsection
