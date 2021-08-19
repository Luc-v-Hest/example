@extends('layouts.app')

@section('content')

    <main>
        <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center">
                <div class="space-y-6">
                    <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                        Trinos - Welcome
                    </h1>

                    @if ($weather)
                        <table>
                            {!! $weather !!}
                        </table>
                    @endif

                    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4">
                        @if($grid)
                            {!! $grid !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="h-10">
        <ul class="flex list-reset bg-gray-300 p-2 text-center">
            <li class="flex-1 inline px-4">
                <a href="https://tailwindcss.com" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Tailwind CSS</a>
            </li>
            <li class="flex-1 inline px-4">
                <a href="https://github.com/alpinejs/alpine" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Alpine.js</a>
            </li>
            <li class="flex-1 inline px-4">
                <a href="https://laravel.com" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Laravel</a>
            </li>
            <li class="flex-1 inline px-4">
                <a href="https://www.w3schools.com/php/" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">W3schools</a>
            </li>
        </ul>
    </footer>
@endsection
