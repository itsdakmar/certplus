<x-app-layout :withHeader="false">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('img/logo.svg') }}" height="36" alt=""></a>
            </div>
            <form class="card card-md" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">{{ __('Create new account') }}</h2>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Name') }}</label>
                        <input value="{{ old('name') }}" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Enter your name') }}">
                        <x-input.error-label for="name"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Team name') }}</label>
                        <input value="{{ old('team_name') }}" type="text" name="team_name" class="form-control @error('team_name') is-invalid @enderror" placeholder="{{ __('Enter team name') }}">
                        <x-input.error-label for="team_name"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Subdomain') }}</label>
                        <div class="input-group mb-2">
                            <input value="{{ old('subdomain') }}" type="text" name="subdomain" class="form-control @error('subdomain') is-invalid @enderror" placeholder="subdomain" autocomplete="off">
                            <span class="input-group-text">
                                {{ config('app.name') }}
                              </span>
                            <x-input.error-label for="subdomain"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{ __('Email address') }}</label>
                        <input value="{{ old('email') }}" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Enter email') }}">
                    </div>
                    <div class="mb-3" x-data="{ togglePassword : false, input : 'password' }">
                        <label class="form-label">{{ __('Password') }}</label>

                        <div class="input-group">
                            <input :type="input" type="password" name="password" class="form-control @error('password') is-invalid @enderror"  placeholder="{{ __('Password') }}"  autocomplete="off">
                            <span class="input-group-text">
                              <a @click="togglePassword = ! togglePassword; input = (input === 'password') ? 'text' : 'password'" href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                <svg x-show="togglePassword" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                <svg x-show="!togglePassword" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="3" y1="3" x2="21" y2="21"></line><path d="M10.584 10.587a2 2 0 0 0 2.828 2.83"></path><path d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341"></path></svg>
                              </a>
                            </span>
                            <x-input.error-label for="password"/>
                        </div>
                    </div>
                    <div class="mb-3" x-data="{ togglePassword : false, input : 'password' }">
                        <label class="form-label">{{ __('Password confirmation') }}</label>
                        <div class="input-group">
                            <input :type="input" type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"  placeholder="{{ __('Password confirmation') }}"  autocomplete="off">
                            <span class="input-group-text">
                              <a @click="togglePassword = ! togglePassword; input = (input === 'password') ? 'text' : 'password'" href="#" class="link-secondary" title="{{ __('Show password') }}">
                                <svg x-show="togglePassword" xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                <svg x-show="!togglePassword" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="3" y1="3" x2="21" y2="21"></line><path d="M10.584 10.587a2 2 0 0 0 2.828 2.83"></path><path d="M9.363 5.365a9.466 9.466 0 0 1 2.637 -.365c4 0 7.333 2.333 10 7c-.778 1.361 -1.612 2.524 -2.503 3.488m-2.14 1.861c-1.631 1.1 -3.415 1.651 -5.357 1.651c-4 0 -7.333 -2.333 -10 -7c1.369 -2.395 2.913 -4.175 4.632 -5.341"></path></svg>
                              </a>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" name="terms" class="form-check-input"/>
                            <span class="form-check-label">{{ __('Agree the') }} <a href="#" tabindex="-1">{{ __('terms and policy') }}</a>.</span>
                        </label>
                        <x-input.error-label for="terms"/>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">{{ __('Create new account') }}</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                {{ __('Already have account?') }} <a href="{{ route('login') }}" tabindex="-1">{{ __('Sign in') }}</a>
            </div>
        </div>
    </div>
</x-app-layout>
