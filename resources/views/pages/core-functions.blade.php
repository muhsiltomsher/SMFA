<!-- resources/views/pages/about.blade.php -->
@extends('layouts.app')

@section('content')
    @include('sections.core-functions.hero') {{-- Optional: an intro section for About/Services --}}
    @include('sections.core-functions.investment-management')
    @include('sections.core-functions.accounting-financial-planning')
    @include('sections.core-functions.wealth-planning')
    {{-- Add more about/service sections as needed --}}
@endsection
