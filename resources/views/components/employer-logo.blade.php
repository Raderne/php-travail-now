@props(['employer' ,'width' => 90])
<!-- <img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}" alt="image" class="rounded-xl"> -->
<img src="{{ asset($employer->logo) }}" alt="image" class="rounded-xl" width="{{$width}}" height="{{ $width }}">