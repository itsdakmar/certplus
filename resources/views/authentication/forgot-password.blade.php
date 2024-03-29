<x-app-layout :withHeader="false">
    <div class="page page-center mb-4">
        <div class="container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('img/logo.svg') }}" height="36" alt=""></a>
            </div>
            <form class="card card-md" action="{{ url('forgot-password') }}" method="post">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ __('Forgot password') }}</h2>
                    <p class="text-muted mb-4">{{ __('Enter your email address and your password will be reset and emailed to you') }}.</p>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Email address') }}</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Enter email') }}">
                        <x-input.error-label for="email"/>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">
                            <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="3" y="5" width="18" height="14" rx="2" /><polyline points="3 7 12 13 21 7" /></svg>
                           {{ __(' Send me new password') }}
                        </button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                {{ __('Forget it') }}, <a href="{{ route('login') }}">{{ __('send me back') }}</a> {{ __('to the sign in screen') }}.
            </div>
        </div>
    </div>
</x-app-layout>
