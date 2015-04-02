@extends('app')

@section('content')

{{--<div class="title">About {{ $name }} Page</div>--}}
{{--<div class="title">About {!! $name !!} Page</div>--}}
<h1>
    About {{ $title }}
</h1>

@if (count($people))
<ul>
    @foreach ($people as $person)
        <li>{{ $person }}</li>
    @endforeach
</ul>
@endif

<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cupiditate dicta omnis sed veniam vitae voluptatibus? Ad doloremque eius fugit, harum inventore ipsa minima natus optio porro similique sit vel.
</p>
@stop