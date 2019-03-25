@extends('layouts.app')

@section('content')
    <h1>{{ $album->name }}</h1>
    <a href="/" class="button secondary">Go Back</a>
    <a href="/photos/create/{{ $album->id }}" class="button">Upload photo To Album</a>
    <hr>
    @if (count($album->photos) > 0)
    @php
        $colcount = count($album->photos);
        $i = 1;
    @endphp
    <div id="photos">
        <div class="row text-center">
            @foreach ($album->photos as $photo)
                @if ($i == $colcount)
                    <div class="medium-4 columns end">
                @else
                    <div class="medium-4 columns">
                @endif
                        <a href="/photos/{{ $photo->id }}">
                            <img src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}"
                                    alt="{{ $photo->title }}" class="thumbnail">
                        </a>
                        <br>
                        <h4>{{ $photo->title }}</h4>
                @if ($i % 3 == 0)
                    </div></div><div class="row text-center">
                @else
                    </div>
                @endif
                @php
                    $i++;
                @endphp
            @endforeach
        </div>
    </div>
@else
    <p>No Photos To Display</p>
@endif
@endsection