@extends('layouts/base')

@section('title', 'Verify your email')

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

                    <div class="p-8 w-full rounded-b-lg shadow-lg">
                        <div class="text-grey-darker text-center">Verify your email</div>

                        <div class="mt-8 p-3 flex border border-blue-lighter bg-blue-lightest text-blue-dark rounded-lg text-sm">
                            <svg class="w-6 h-6 self-center flex-no-shrink text-blue-light fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 9a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0v4a1 1 0 0 1-1 1zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </svg>

                            <div class="ml-3">
                                @if (session('resent'))
                                    A fresh verification link has been sent to your email.
                                @else
                                    Please check your email for a verification link.
                                @endif
                            </div>
                        </div>

                        @if (Route::has('register'))
                            <div class="mt-8 text-center text-sm text-grey-dark">
                                Didn't get the email? <a tabindex="3" class="font-semibold text-grey-darker hover:text-grey-darkest no-underline" href="{{ route('verification.resend') }}">Resend</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
