@extends('app')


@section('content')
<h1>About</h1>


@if(count($people))
<h3>People ....</h3>

<ul>
    @foreach($people as $person)
        <li>{{ $person }}</li>
    @endforeach
</ul>
@endif


<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet assumenda atque cum dolores eligendi eos expedita incidunt inventore iusto, laborum laudantium nam nisi nulla perferendis quas qui quos sunt voluptates.
</p>
@stop