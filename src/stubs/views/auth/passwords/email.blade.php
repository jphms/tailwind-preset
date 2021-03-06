@extends('layouts/base')

@section('title', 'Reset your password')

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

                    <form class="p-8 w-full rounded-b-lg shadow-lg" action="{{ route('password.email') }}" method="POST">
                        @csrf

                        <div class="text-grey-darker text-center">Reset your password</div>

                        @if (session('status'))
                            <div class="mt-8 p-3 flex border border-blue-lighter bg-blue-lightest text-blue-dark rounded-lg text-sm">
                                <svg class="w-6 h-6 self-center flex-no-shrink text-blue-light fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>

                                <div class="ml-3">{{ session('status') }}</div>
                            </div>
                        @endif

                        <div class="mt-8 block">
                            <div class="relative">
                                <div class="pl-3 absolute pin-y pin-l flex items-center text-grey pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z" />
                                    </svg>
                                </div>

                                <input
                                    autofocus
                                    required
                                    tabindex="1"
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

                        <div class="mt-6 block">
                            <input
                                tabindex="2"
                                class="py-4 px-8 appearance-none w-full border-0 bg-blue text-sm font-semibold hover:bg-blue-dark focus:outline-none focus:shadow-outline shadow-transition text-white rounded cursor-pointer"
                                type="submit"
                                value="Send reset link"
                            />
                        </div>

                        @if (Route::has('register'))
                            <div class="mt-8 text-center text-sm text-grey-dark">
                                Remember it? <a tabindex="3" class="font-semibold text-grey-darker hover:text-grey-darkest no-underline" href="{{ route('login') }}">Sign in</a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
