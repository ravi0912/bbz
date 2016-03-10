
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php $i=0;
        $dirname = "uploads/projects/".$user_id."/".$project_id."/";
        $images = glob($dirname."*.jpeg");
        foreach($images as $image)
        {
            $image1 = "'".$image."'";
            $active="";
            if($i==$active_image)
            {
                $active='active';
            }
            echo '<li data-target="#myCarousel" class="'.$active.'" data-slide-to="'.$i++.'"></li>';
        }
        ?>
    </ol>

    <div class="carousel-inner" role="listbox">
        <?php	$i=0;

        foreach($images as $image)
        {
            $image1 = "'".$image."'";
            $active="";
            if($i==$active_image)
            {
                $active='active';
            }
            echo '<div class="item'.$active.'" id="carousel_item"><img src="'.$image.'" id="imgCarousel"></div>';
            $i++;
        }
        ?>
    </div>
</div>
</div>
<a class="left carousel-control" id="carousel_left" href="#myCarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"aria-hidden="true">

	</span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" id="carousel_right" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true">

	</span>
    <span class="sr-only">Next</span>
</a>
</div>