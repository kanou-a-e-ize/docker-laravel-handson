<!DOCTYPE html>
    @extends('book/layout')
    @section('content')
    @include('book/form', ['target' => 'store'])
    @endsection   
</html>