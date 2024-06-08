<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
 
        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ url('images/favicon.png') }}" type="image/png">
        <title>{{ config('app.name') }}</title>
 
        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
 
        @filamentStyles
        @vite('resources/css/app.css')
    </head>
 
    <body class="antialiased">
        <div class="bg-white shadow-md">
            <div class="flex items-center justify-center px-1 py-2">
                <div class="flex items-center justify-center">
                    <img src="{{ url('/images/brand.png'); }}" alt="logo" class="h-11">
                </div>
            </div>
        </div>
        {{ $slot }}
 
        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>