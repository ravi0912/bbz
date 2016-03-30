@extends('app')

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('css/showFullBlogs2.css') }}">


    <!--showFullBlogs starts-->

    <div id = "blog_2_form_head" class = "blog_pop">
        <div id = "blog_1_form" class = "blog_1_form">
            <div id = "blog_1_form_image" class = "blog_1_form_image">

                <img src = "{{ URL::asset('images/blog/2/cover.jpg') }}" class="display_images_cover img-thumbnail">
            </div>
            <div id = "blog_1_form_content" class = "blog_1_form_content">
                <h1>
                    Real Estate as an upcoming boom
                </h1>
                <p>
                    Indian Real Estate is experiencing a boom not only domestic property (such as house, individual flats and
                    maisonettes) but also in commercial properties (property that is used for business activities).
                    Real estate is currently the fourth-largest sector in the country in terms of Foreign Direct Investment (FDI) inflows.
                    Total FDI in the construction development sector during April 2000-May 2015 stood at around US$ 24.07 billion.
                </p>
                <p>
                    The Indian Government has been supportive towards the industry and thus there been massive developments in recent times
                    regarding policies and projects. In August 2015, the Union Cabinet approved 100 Smart City Projects in India. The Government
                    has also raised FDI limits for townships and settlements development projects to 100 per cent. Real estate projects within
                    the Special Economic Zone (SEZ) are also permitted 100 per cent FDI. In Union Budget 2015-16, the government allocated US$ 3.72 billion
                    for housing and urban development.<br>
                <div>
                    <img src = "{{ URL::asset('images/blog/2/1.jpg') }}" class="display_images img-thumbnail">
                </div>
                There are many factors responsible for this boom in the Indian Real Estate Sector. In recent years, India real estate
                has been in a flourishing stage in not only the Tier 1 cities of India, but also in other Indian cities. Some of the key
                factors responsible for this are increase in the population level, emergence of nuclear families & rapid urbanization.
                The presence of NRIs and their interest in investing in the Indian real estate market as well as the liberalization policies taken
                up by the Indian government to encourage the 100% FDI participation have contributed greatly in rapid growth of the sector. International
                as well as domestic real estate developers have also contributed immensely to prospering Indian Real Estate Market.
                India's real estate market is expected to grow two-fold from US$ 93.8 billion in 2014 to an estimated US$ 180 billion in 2020.
                </p>

                <i>Sources</i>: <a href="http://www.ibef.org/industry/indian-real-estate-industry-analysis-presentation">IBEF</a>,
                <a href="http://business.mapsofindia.com/india-real-estate/boom.html#sthash.rAzDNqPg.dpuf">Maps of India</a>

            </div>
        </div>
    </div>

    <!--showFullBlogs ends-->




@stop