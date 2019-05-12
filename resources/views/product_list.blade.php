@extends('layouts.template')

@section('CssPlugins')
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">

@endsection

@section('content')
    <product_list :response="{{ json_encode($products) }}" :categories="{{ json_encode($categories) }}"></product_list>
@endsection