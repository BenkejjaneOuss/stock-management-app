@extends('layouts.template')

@section('CssPlugins')
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <product_purchase :response="{{ json_encode($products_purchase) }}" :products="{{ json_encode($products) }}" :suppliers="{{ json_encode($suppliers) }}"></product_purchase>
@endsection