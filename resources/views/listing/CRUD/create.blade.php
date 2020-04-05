@extends('layouts.app')
@section('content')
@include('listing.listing-go.go-home')
    <form action="{{route('listings.store')}}" method="POST">
        @include('listing.errors.errors')
        @csrf
        @include('listing.form.create-or-edit')
    </form>
@endsection
