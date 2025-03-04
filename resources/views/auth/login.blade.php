<div  name="test" class=" w-full">

    <x-layout class=" m-20">



        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4 flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                    Login
                </button>
            </div>

            @if (Route::has('password.request'))
                <div class="mb-4">
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-900">Forgot your password?</a>
                </div>
            @endif
        </form>




    </x-layout>

</div>