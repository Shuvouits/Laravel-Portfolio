@extends('Frontend.master')
@section('main')

@include('Frontend.body.hero')

<main id="main">

    <br>
<br>
@include('Frontend.home.experience')

<br>
<br>
@include('Frontend.home.technology')

<br>
<br>
@include('Frontend.home.portfolio')
<br>
<br>
@include('Frontend.home.faq')

<br>
<br>
@include('Frontend.home.contact')

<br>
<br>

</main>



@endsection