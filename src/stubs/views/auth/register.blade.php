@extends('layouts/base')

@section('title', 'Sign up')

@section('body')
    <div class="min-h-screen flex items-center justify-center bg-grey-lightest">
        <div class="p-0 sm:px-8 m-auto max-w-sm w-full">
            <div class="m-8">
                <div class="text-xl text-center">
                    <a class="text-grey-darker hover:text-grey-darkest no-underline" href="/">
                        {{ config('app.name') }}
                    </a>
                </div>

                <div class="mt-8 bg-white rounded-lg">
                    <div class="h-3 block rounded-t-lg w-full bg-blue"></div>

                    <form class="p-8 w-full rounded-b-lg shadow-lg" action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="text-grey-darker text-center">Register a new account</div>

                        <div class="mt-8 block">
                            <div class="relative">
                                <div class="pl-3 absolute pin-y pin-l flex items-center text-grey pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                                    </svg>
                                </div>

                                <input
                                    autofocus
                                    required
                                    tabindex="1"
                                    type="text"
                                    name="name"
                                    placeholder="Name"
                                    value="{{ old('name') }}"
                                    class="py-3 pl-8 pr-3 block appearance-none focus:outline-none focus:shadow-outline shadow-transition w-full h-full border bg-grey-lightest text-grey-darker rounded{{ $errors->first('name', ' border-red') }}"
                                />
                            </div>

                            @if ($errors->has('name'))
                                <div class="mt-3 text-xs font-semibold text-red-light">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="mt-4 block">
                            <div class="relative">
                                <div class="pl-3 absolute pin-y pin-l flex items-center text-grey pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z" />
                                    </svg>
                                </div>

                                <input
                                    required
                                    tabindex="2"
                                    type="email"
                                    name="email"
                                    placeholder="Email"
                                    value="{{ old('email') }}"
                                    class="py-3 pl-8 pr-3 block appearance-none focus:outline-none focus:shadow-outline shadow-transition w-full h-full border bg-grey-lightest text-grey-darker rounded{{ $errors->first('email', ' border-red') }}"
                                />
                            </div>

                            @if ($errors->has('email'))
                                <div class="mt-3 text-xs font-semibold text-red-light">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <div class="mt-4 block">
                            <div class="relative">
                                <div class="pl-3 absolute pin-y pin-l flex items-center text-grey pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M7 10V7a5 5 0 1 1 10 0v3h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h2zm2 0h6V7a3 3 0 0 0-6 0v3zm-4 2v8h14v-8H5zm7 2a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1z" />
                                    </svg>
                                </div>

                                <input
                                    required
                                    tabindex="2"
                                    type="password"
                                    name="password"
                                    placeholder="Password"
                                    class="py-3 pl-8 pr-3 block appearance-none focus:outline-none focus:shadow-outline shadow-transition w-full h-full border bg-grey-lightest text-grey-darker rounded{{ $errors->first('password', ' border-red') }}"
                                />
                            </div>

                            @if ($errors->has('password'))
                                <div class="mt-3 text-xs font-semibold text-red-light">{{ $errors->first('password') }}</div>
                            @endif
                        </div>

                        <div class="mt-4 block">
                            <div class="relative">
                                <div class="pl-3 absolute pin-y pin-l flex items-center text-grey pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M7 10V7a5 5 0 1 1 10 0v3h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h2zm2 0h6V7a3 3 0 0 0-6 0v3zm-4 2v8h14v-8H5zm7 2a1 1 0 0 1 1 1v2a1 1 0 0 1-2 0v-2a1 1 0 0 1 1-1z" />
                                    </svg>
                                </div>

                                <input
                                    required
                                    tabindex="3"
                                    type="password"
                                    name="password_confirmation"
                                    placeholder="Confirm password"
                                    class="py-3 pl-8 pr-3 block appearance-none focus:outline-none focus:shadow-outline shadow-transition w-full h-full border bg-grey-lightest text-grey-darker rounded{{ $errors->first('password_confirmation', ' border-red') }}"
                                />
                            </div>

                            @if ($errors->has('password_confirmation'))
                                <div class="mt-3 text-xs font-semibold text-red-light">{{ $errors->first('password_confirmation') }}</div>
                            @endif
                        </div>

                        <div class="mt-6 block">
                            <input
                                tabindex="5"
                                class="py-4 px-8 appearance-none w-full border-0 bg-blue text-sm font-semibold hover:bg-blue-dark focus:outline-none focus:shadow-outline shadow-transition text-white rounded cursor-pointer"
                                type="submit"
                                value="Sign up"
                            />
                        </div>

                        @if (Route::has('register'))
                            <div class="mt-8 block text-center text-sm text-grey-dark">
                                Have an account? <a tabindex="6" class="font-semibold text-grey-darker hover:text-grey-darkest no-underline" href="{{ route('login') }}">Sign in</a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
