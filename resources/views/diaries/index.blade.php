    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
    
    @section('content')
        <h1>Travelnote</h1>
        
        <div class="serach">
            
            <form action="{{url('/')}}" method="GET">
                <p><input type="text" name="keyword" value="{{$keyword}}"></p>
                <p><input type="submit" value="検索"></p>
            </form>
             
            @if($diaries->count())
                <table border="1">
                    @foreach ($diaries as $diary)
                        <div class='destination'>
                            <a href="/diaries/{{ $diary->id }}">{{ $diary->place }}</a>
                        </div>
                    @endforeach
                </table>
            @else
                <p>見つかりませんでした。</p>
            @endif
        </div>
        
        <a href='/diaries/create'>create</a>
        
        <div id="map" style="height:500px"> 
	    </div>
	    <script src="{{ asset('/js/map.js') }}"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{ config("services.google-map.apikey") }}&callback=initMap" async defer>
	    </script>
    @endsection