@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <passport-authorized-client></passport-authorized-client>
            <passport-client></passport-client>
            <passport-personal-access></passport-personal-access>
        </div>
    </div>
</div>
@endsection
