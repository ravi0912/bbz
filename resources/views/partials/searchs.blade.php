@if($searchResults > 0)
    @foreach($searchs as $u)

        <a href="{{url('/showprofile/'.$u->id)}}">
            <nav class="search-results-list" onclick="search_input('{{ $u->name }}')">
                {{ $u->name }}
            </nav>
        </a>
    @endforeach
    <nav class="search-results-list">No more results Found!</nav>
@else
    <nav class="search-results-list">No results Found!</nav>
@endif

