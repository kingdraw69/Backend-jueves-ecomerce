@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow rounded-4 p-4" style="width: 100%; max-width: 600px;">
        <h2 class="text-center mb-4">{{ __('Verify Your Email Address') }}</h2>

        @if (session('resent'))
            <div class="alert alert-success rounded-3">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif

        <p class="mb-2 text-center">
            {{ __('Before proceeding, please check your email for a verification link.') }}
        </p>
        <p class="mb-4 text-center">
            {{ __('If you did not receive the email') }},
        </p>

        <form method="POST" action="{{ route('verification.resend') }}" class="text-center">
            @csrf
            <button type="submit" class="btn btn-link px-0">
                {{ __('Click here to request another') }}
            </button>
        </form>
    </div>
</div>
@endsection

