@props(['title' => ''])

<x-base-layout :$title>
    @include('layouts.partials.header')
    {{ $slot }}
    @include('layouts.partials.footer')    
</x-base-layout>