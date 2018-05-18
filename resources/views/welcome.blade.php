@extends('layouts.default')

@section('page_title')
    Create new Bin
@endsection

@push('styles')

@endpush

@push('header_scripts')

@endpush

@section('content')
    <div class="container">
        <create-bin></create-bin>

        <br>
        <iframe src="//api.apiembed.com/?source=https://request.wartner.io/request.wartner.io.har&targets=shell:curl,node:unirest,java:unirest,python:requests,php:curl,ruby:native,objc:nsurlsession,go:native" frameborder="0" scrolling="no" width="100%" height="500px" seamless></iframe>
    </div>
@endsection

@push('footer_scripts')

@endpush
