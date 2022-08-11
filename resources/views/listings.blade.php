<h1>{{ $heading }}</h1>
@if(count($listings) == 0)
<p>NO LISTINGS</p>
@endif
@foreach ($listings as $listing)
    <h3>{{ $listing['title'] }}</h3>
    <p>{{ $listing['description'] }}</p>
@endforeach
