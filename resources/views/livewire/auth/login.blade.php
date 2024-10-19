<div class="mx-auto w-max">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm pb-1">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Untuk memesan hotel,
                masuk ke Akun Anda terlebih dahulu</h2>
        </div>


        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            <form class="space-y-6" wire:submit.prevent="login">
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="email" name="email" wire:model="email" id="email" type="email"
                            autocomplete="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        {{-- <div class="text-sm">
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                            password?</a>
                    </div> --}}
                    </div>
                    <div class="mt-2">
                        <input id="password" wire:model="password" id="password" name="password" type="password"
                            autocomplete="current-password" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-bold font-sans leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk</button>
                </div>
            </form>

        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm flex items-center justify-center">
            <p class="font-bold italic">atau masuk/daftar dengan</p>
        </div>
        <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm flex items-center justify-center">
            <div class="flex justify-center gap-x-4 p-2">
                <!--[if BLOCK]><![endif]--> <a
                    class="ring-2 ring-slate-700/50 hover:ring-slate-600/70 transition-all rounded-lg px-4 py-3 flex gap-2 items-center"
                    href="{{ route('login-user.google') }}">
                    <svg class="w-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                        <path
                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                        </path>
                    </svg> <span>Google</span>
                </a>
                <!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>