@extends('app')

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('css/showFullBlogs3.css') }}">

    <!--showFullBlogs starts-->

    <div id = "blog_3_form_head" class = "blog_pop">
        <div id = "blog_1_form" class = "blog_1_form">
            <div id = "blog_1_form_image" class = "blog_1_form_image">

                <img src = "{{ URL::asset('images/blog/3/cover.jpg') }}" class="display_images_cover img-thumbnail">
            </div>
            <div id = "blog_1_form_content" class = "blog_1_form_content">
                <h1> 3D Printing- A new world to come!</h1>
                <p>
                    3D printing, a recently evolved technology is now being rapidly adopted in the industry of
                    Infrastructure. Not only is it being used to make everyday items such as jewellery or furniture, it is
                    now being used to construct large scale infrastructure projects such as houses & bridges.
                </p>
                <p>
                    WinSun, a Chinese private firm, has used giant 3D printers to make 10 detached single storey houses
                    in a day. It has used four 10m x 6.6m printers to spray a mixture of cement and construction waste
                    to build the walls, layer by layer, official Xinhua news agency reported.
                </p>
                <div>
                    <iframe class="display_images img-thumbnail"  src="https://www.youtube.com/embed/SObzNdyRTBs" frameborder="0" allowfullscreen></iframe>
                </div>
                <p>
                    Since all work is automated &amp due to the cheap material used, each house can be printed for under
                    $5000. "We can print buildings to any digital design our customers bring us. It's fast and cheap," says
                    WinSun chief executive Ma Yihe. The company hopes that one day, their technology will be used to
                    build skyscrapers all around the world. However, the current laws in China do not allow
                    multi-storey 3D printed houses.
                </p>
                <p>
                    On the other side of the world, a leading technology start-up, MX3D is under the process of
                    developing world's first 3-D printed bridge over an Amsterdam canal. Co-founded by Joris Laarman and
                    Tim Geurtjens, the company plans to use robots to complete the task in a fast and effective manner.
                    The use of robots fulfils the dual expectation of precision and cost saving. The steel footbridge
                    will span eight meters and is expected to be completed by 2017. "The bridge is going to be fairly
                    small - it's a pedestrian bridge," Laarman says. "It's still a huge challenge, because we want to print
                    it in one go. We want the robots to print their own support structure as they move over the water."
                </p>
                <div>
                    <iframe class="display_images img-thumbnail" src="https://www.youtube.com/embed/SEaht2tQ8P8" frameborder="0" allowfullscreen></iframe>
                </div>
                <p>
                    The six-axis robots MX3D are using, are able to rotate their arms along six different planes of
                    movements, depositing small quantities of steel and building the bridge layer by layer. MX3D
                    originally intended to print the bridge in situ, but had to abandon that plan over health and safet
                    concerns.
                </p>
                <p>
                    Such examples showcase that 3D printing in the infrastructure industry is not only a fast & effective
                    approach, but also a commercially feasible one. 3D printing in India is an exciting prospect as it is
                    completely virgin and the most exciting use cases of 3D printing in a rural or social context is bound
                    to come out of India.
                    <br>
                    How soon it will be adopted in the industry, only time can tell.
                </p><br>
                <i>Sources</i>:<br><a href="http://thetechpanda.com/2014/01/07/3d-printing-opportunities-challenges-future-india/#.VpiWwPl97IU">3D Printing &ndash; Opportunities, Challenges and the Future in India: <i>Tech Panda</i>
                    <br><a href="http://www.bbc.com/news/blogs-news-from-elsewhere-27156775">China: Firm 3D prints 10 full-sized houses in a day: <i>BBC News</i>
                        <br><a href="http://www.dezeen.com/2016/01/13/video-interview-robots-worlds-first-3d-printed-bridge-mx3d-joris-laarman-movie/">Producing the world's first 3D-printed bridge with robots "is just the beginning": <i>Dezeen</i></a>
            </div>
        </div>
    </div>

    <!--showFullBlogs ends-->





@stop