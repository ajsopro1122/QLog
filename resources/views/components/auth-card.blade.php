<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cyan-900 p-5">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg bg-gray-200">
        {{ $slot }}
    </div>
</div>
