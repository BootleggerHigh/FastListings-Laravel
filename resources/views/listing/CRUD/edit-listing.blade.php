@extends('layouts.app')
@section('content')
    @include('listing.listing-go.go-home')
    <form action="{{route('listings.update',$listing->id)}}" method="POST">
        @method('PATCH')
        @include('listing.errors.errors')
        @csrf
        @include('listing.form.create-or-edit')
    </form>
    @endsection
