@if($searchs)
    <?php
        $value = 0;
    ?>
    @foreach($searchs as $u)
        @if ($value <= 5)
            <a href="{{url('/showprofile/'.$u->id)}}">
                <nav class="search-results-list" onclick="search_input('{{ $u->name }}')">
                    {{ $u->name }}
                </nav>
            </a>
        @endif
        <?php
         $value++;
        ?>
    @endforeach
    <nav class="search-results-list">Press Enter to see more result</nav>
@else
    <nav class="search-results-list">No results Found!</nav>
@endif