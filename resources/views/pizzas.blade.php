@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        @foreach($pizzas as $pizza)
        <div>
            {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop->index == 1)
            <span>Last in the loop.</span>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection