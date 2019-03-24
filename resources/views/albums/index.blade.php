@extends('layouts.app')

@section('content')
    <h3>Albums</h3>
    @if (count($albums) > 0)
        @php
            $colcount = count($albums);
            $i = 1;
        @endphp
        <div id="albums">
            <div class="row text-center">
                @foreach ($albums as $album)
                    @if ($i == $colcount)
                        <div class="medium-4 columns end">
                    @else
                        <div class="medium-4 columns">
                    @endif
                            <a href="/albums/{{ $album->id }}">
                                <img src="storage/album_covers/{{ $album->cover_image }}"
                                        alt="{{ $album->name }}" class="thumbnail">
                            </a>
                            <br>
                            <h4>{{ $album->name }}</h4>
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
        <p>No Albums To Display</p>
    @endif
@endsection