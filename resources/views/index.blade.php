<!-- this line when use file in specific model files -->
{{--@extends('product::layouts.master')--}}

<!-- when use general app file from main project that will applied all in modules-->
@extends('app')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('product.name') !!}</p>
@endsection
