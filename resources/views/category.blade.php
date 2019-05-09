@extends('layouts.template')

@section('CssPlugins')
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">
@endsection


@section('content')
    <category :response="{{ json_encode($categories) }}"></category>
@endsection