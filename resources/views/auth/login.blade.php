@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="max-w-md w-full">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        E-mail
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Email" name="email">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="*****">
                </div>
                <div class="mb-6 font-bold">
                    {!! Captcha::img() !!}
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="captcha">
                        Captcha
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="captcha" name="captcha" type="text" placeholder="Enter captcha">
                </div>
                <div class="flex items-center justify-between mt-3">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Sign In
                    </button>

                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                        href="{{ route('forgotPassword') }}">
                        Forgot Password?
                    </a>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2023 Sys Corp. All rights reserved.
            </p>
        </div>
    </div>
@endsection
