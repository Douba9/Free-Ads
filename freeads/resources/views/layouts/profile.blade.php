@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($name) }}</div>

                @if (Route::has('password.request'))
                    <a class="btn btn-success m-5" href="{{ route('password.request') }}">
                        {{ __('Change Password') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection