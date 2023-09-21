@php
    function splitStringAfterChars($string, $numChars) {
    if (strlen($string) <= $numChars) {
        return $string;  // Return the original string if it's shorter than numChars
    }

    $firstLine = substr($string, 0, $numChars);
    $secondLine = substr($string, $numChars);

    return $firstLine . "\n" . $secondLine;
}
@endphp

@extends('frontend.layouts.layout')
@section('content')
    @include('frontend.home.partials.banner')
    @include('frontend.home.partials.featured')
    @include('frontend.home.partials.product_list')
    @include('frontend.home.partials.sale')
    @include('frontend.home.partials.best_seller')
    @include('frontend.home.partials.subscribe')
    @include('frontend.home.partials.clients')
@endsection