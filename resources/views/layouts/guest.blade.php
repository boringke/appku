@extends('layouts.base')

@section('body')
    {{ $slot }}
    @yield('scripts')
@endsection
