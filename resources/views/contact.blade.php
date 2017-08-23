@extends('layouts.app')




@section('content')

    <h1>Contact Page</h1>


    @if (count($people))

        <ul>
        @foreach($people as $person)

            <li>{{$person}}</li><br>


            @endforeach

        </ul>
    @endif

@stop


@section('footer')

    {{$person}}

    @stop


