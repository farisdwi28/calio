<div class="relative h-screen overflow-hidden">
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="absolute inset-0">
            <img src="{{ asset('assets/images/bglogin.jpeg') }}" class="fixed w-screen h-screen object-cover">
        </div>
    </div>
    <div class="flex items-center justify-center h-full relative z-10" data-aos="zoom-out-up">
        <div class="flex gap-16 w-full max-w-2xl p-6 rounded-lg bg-white bg-opacity-90 text-white shadow-lg">
            <form class="space-y-6 w-full">
                <h1 class="text-4xl text-primary1 font-bold text-center mb-6">MASUK</h1>
                <div class="mb-4">
                    <label for="formUsername" class="block text-base font-semibold text-gray-900">Nama Pengguna</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                            </svg>
                        </span>
                        <input type="text" id="formUsername" wire:model="username"
                            class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                            placeholder="calio2023">
                    </div>
                    @error('username')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="formPassword" class="block text-base font-semibold text-gray-900">Kata Sandi</label>
                    <div class="flex">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md">
                            <svg width="16" height="16" fill="currentColor"
                                class="bi bi-shield-lock-fill w-4 h-4 text-gray-500" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                            </svg>
                        </span>
                        <input type="password" id="formPassword" wire:model="password"
                            class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                            placeholder="******">
                    </div>
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                <button wire:click="login" type="button"
                    class="group relative overflow-hidden bg-primary1 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center transition-all transform hover:scale-105">
                    Login
                    <svg class="z-40 ml-2 -mr-1 w-4 h-4 transition-all duration-300 transform group-hover:translate-x-1"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div
                        class="absolute inset-0 h-[200%] w-[200%] rotate-45 translate-x-[-70%] transition-all group-hover:scale-100 bg-white/30 group-hover:translate-x-[50%] z-20 duration-1000">
                    </div>
                </button>
                <div class="text-base font-bold text-gray-500">
                    Belum Memiliki Akun? <a href="/register" class="text-blue-700 hover:underline">Buat Akun</a>
                </div>
            </form>
            <div class="hidden md:flex w-1/2 items-center justify-center">
                <img src="{{ asset('assets/images/logonew.png') }}" class="w-35 h-20" alt="Side Image">
            </div>
        </div>
    </div>
</div>
