<div>
    @if($liked == 1 )
        <?php $likes = $likes -1 ?>
        @if($likes == 0)
            you liked
        @else
            you & {{ $likes }} liked
        @endif
    @else
        @if($likes == 0)
        @else
            {{ $likes }} liked
        @endif
    @endif

</div>