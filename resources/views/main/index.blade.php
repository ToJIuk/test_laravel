@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">

            @foreach($test_table as $item)
                @if($item->position == 'директор')
                    <div class="row">
                    <div class="col-md-4 col-lg-4">{{ $item->full_name }} ({{$item->position}})</div>
                    </div>
                @elseif($item->position == 'зам. директора')
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-md-offset-1">{{ $item->full_name }} ({{$item->position}})</div>
                    </div>
                @elseif($item->position == 'начальник отдела')
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-md-offset-2">{{ $item->full_name }} ({{$item->position}})</div>
                    </div>
                @elseif($item->position == 'начальник бригады')
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-md-offset-3">{{ $item->full_name }} ({{$item->position}})</div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-md-offset-4">{{ $item->full_name }} ({{$item->position}})</div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>
@endsection
