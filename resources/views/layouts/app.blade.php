@extends('layouts.base')

@section('body')
    <div class="md:flex md:flex-col">
        <div class="md:h-screen md:flex md:flex-col">
            <div class="md:flex md:flex-shrink-0">
                <div class="bg-indigo-900 md:flex-shrink-0 md:w-56 px-6 py-4 flex items-center justify-between md:justify-center">
                    <div class="flex justify-between items-center space-x-3">
                        <a class="mt-1" href="{{route('dashboard')}}"><x-logo height="28" /></a>
                        <span class="text-white"><a class="mt-1" href="{{route('dashboard')}}">{{config('app.name')}}</a></span>
                    </div>
                    <div x-data="{ open: false }" class="md:hidden">
                        <svg @click="open = true" class="cursor-pointer fill-white w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                        <div x-show="open" @click.away="open = false">
                            <div @click="open = false" style="position: fixed; top: 0; right: 0; left: 0; bottom: 0; z-index: 99998; background: black; opacity: .2"></div>
                            <div @click="open = false" class="right-0 pr-6" style="position: absolute; z-index: 99999;">
                                <div class="mt-2 px-8 py-4 shadow-lg bg-indigo-800 rounded">
                                    @livewire('main-menu')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white border-b w-full p-4 md:py-0 md:px-12 text-sm md:text-md flex justify-between items-center">
                    <div class="mt-1 mr-4">@hasSection ('page-name')<span class="text-xl font-bold">@yield('page-name')</span> @endif</div>
                    @livewire('user-menu')
                </div>
            </div>
            <div class="md:flex md:flex-grow md:overflow-hidden">
                <div class="hidden md:block bg-indigo-800 flex-shrink-0 w-56 p-12 overflow-y-auto">
                    @livewire('main-menu')
                </div>
                <div class="md:flex-1 px-4 py-8 md:p-12 md:overflow-y-auto" scroll-region>
                    <x-flash-messages />
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    @yield('scripts')
@endsection
