@extends('layouts.template')

@section('CssPlugins')
    <!-- Custom CSS -->
    <link href="{{URL::to('dist/css/style.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<product_sale :response="{{ json_encode($products_sale) }}" :products="{{ json_encode($products) }}" :clients="{{ json_encode($clients) }}"></product_sale>
@endsection
