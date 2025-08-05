@extends('layouts.app')

@section('content')
    @include('sections.core-functions.hero') {{-- Optional: an intro section for About/Services --}}
    @include('sections.core-functions.investment-management')
    @include('sections.core-functions.accounting-financial-planning')
    @include('sections.core-functions.wealth-planning')
    @include('sections.core-functions.legal-risk-management')
    @include('sections.core-functions.lifestyle-concierge')
@endsection
