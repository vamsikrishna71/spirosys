@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="max-w-md w-full">
            <form action="/forgot-password" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <div>{!! Captcha::img() !!}</div>
                    <input type="text" name="captcha" id="captcha" placeholder="Enter Captcha"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection














{{-- <form action="/forgot-password" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <div>{!! Captcha::img() !!}</div>
    <input type="text" name="captcha">
    <button type="submit">Reset Password</button>
</form> --}}
