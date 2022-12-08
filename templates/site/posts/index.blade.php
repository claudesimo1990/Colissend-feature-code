@extends('layouts.app')

@section('title')Colissend|Posts @endsection

@section('content')
    <div class="relative bg-gray-50 pt-16 sm:pt-24 lg:pt-32">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
            <div>
                @foreach($posts as $post)
                    @include('site.components.post', $post)
                @endforeach
            </div>
        </div>
    </div>

@endsection
