@extends('app')

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('css/showFullBlogs4.css') }}">

    <!--showFullBlogs starts-->

    <div id = "blog_4_form_head" class = "blog_pop">
        <div id = "blog_1_form" class = "blog_1_form">
            <div id = "blog_1_form_image" class = "blog_1_form_image">

                <img src = "{{ URL::asset('images/blog/4/cover.jpg') }}" class="display_images_cover img-thumbnail">
            </div>
            <div id = "blog_1_form_content" class = "blog_1_form_content">
                <h1>Guwahati edged over other cities by experts in terms of earthquake safety</h1>
                <p>
                    International scientific agency from Norway called NORSAR has in its report states that the resilience
                    of buildings in Guwahati to probable earthquake is far better than buildings studied in other cities of India. (first reported by <i>TheNortEastToday</i>)
                </p>
                <p>
                    This project examined aprox. 16,000 buildings samples in Guwahati. Experts from Norway and Assam
                    Engineering College have imposed simulated earthquakes like the Nepal earthquake or even bigger
                    including the Great Assam earthquake of 1897 and 1950 and their impact on these buildings. They
                    have just concluded their studies and submitted their final report which states that the resilience
                    power of buildings in Guwahati to probable earthquake is far better than buildings studied in
                    other cities of India.
                </p>
                <p>
                    In Guwahati, no high rise building can be constructed without the services of licensed; architects,
                    engineers, structural engineers, geotechnical engineers and field supervisors. The design prepared by
                    the Structural Engineer has to be vetted by a Structural Design Review Panel like IIT Guwahati and
                    Assam Engineering College.
                    <br>
                    P.K Sharma, President of AREIDA has said, “Assam must learn to live with earthquakes; and Guwahati
                    cannot escape high rise buildings due to scarcity and affordability of residential land.”
                </p><br>
                <i>Source</i>: <a href="http://thenortheasttoday.com/buildings-of-guwahati-safer-than-others-in-the-countrynorway-experts-on-earthquake/">Buildings of Guwahati safer than others in the country:Norway experts on earthquake</a>: <i>(TheNorthEastToday)</i>
            </div>
        </div>
    </div>

    <!--showFullBlogs ends-->





@stop