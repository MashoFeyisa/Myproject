@extends('layouts.app')

@section('styles')

@endsection

@section('scripts')
 <script>
 alert('hi')
</script>
@endsection 


@section('content')
<section>
    <h1>About Us</h1>
    <p>this is the simple layout page built using html css and laravel</p>
    <p>Name:{{$name}}</p>
    <p>ID:{{$id}}</p>
</section>
@endsection