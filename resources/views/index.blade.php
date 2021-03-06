@extends('layouts/app')

@section('content')

<section class="cntnt-sectn-basic">
    <div class="container">
        <div class="col-lg-12 col-sm-12 col-md-12 cntnt-sectn-one"> 
            <h3>Flexible & Powerful Online Store Builder</h3>
            <span>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh<br>
                sdfs dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</span>
            <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest<br>
                gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. </p>
        </div>
        <div id="features" class="col-lg-12 col-sm-12 col-md-12 features-hdng">
            <p>Features you want</p>
            <img src="{{ url('/lib/img/feature-hdng-arow.png') }}" alt="" title="">
        </div>

        <div class="col-lg-12 col-sm-12 col-md-12 cntnt-post cntnt-post-first">
            <div class="col-lg-7 col-md-7 col-sm-7 design-cntl-img"><img src="{{ url('/lib/img/design-cntl-img.jpg') }}" alt="" title=""></div>
            <div class="col-lg-5 col-md-5 col-sm-5 cntnt-post-one">
                <h3>Control your site design</h3>
                <span>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</span>
                <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. </p>
            </div>
        </div>

    </div>
</section>




<section class="cntnt-sectn-basic">
    <div class="container">
        <div class="col-lg-12 col-sm-12 col-md-12 cntnt-post cntnt-post-second">
            <div class="col-lg-7 col-md-7 col-sm-7 mobile-frndly-img"><img src="{{ url('/lib/img/mobile-frndly-img.jpg') }}" alt="" title=""></div>
            <div class="col-lg-5 col-md-5 col-sm-5 cntnt-post-two">
                <h3>Mobile Friendly</h3>
                <span>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</span>
                <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. </p>
            </div>
        </div>
    </div>
</section>



<section class="cntnt-sectn-basic">
    <div class="container">
        <div class="col-lg-12 col-sm-12 col-md-12 cntnt-post cntnt-post-first">
            <div class="col-lg-7 col-md-7 col-sm-7 design-cntl-img"><img src="{{ url('/lib/img/map-post-img.jpg') }}" alt="" title=""></div>
            <div class="col-lg-5 col-md-5 col-sm-5 cntnt-post-one cntnt-post-three">
                <h3>Accept global currencies</h3>
                <span>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</span>
                <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. </p>
            </div>
        </div>

    </div>
</section>





<section class="cntnt-sectn-basic last">
    <div class="container">
        <div class="col-lg-12 col-sm-12 col-md-12 cntnt-post cntnt-post-second">
            <div class="col-lg-7 col-md-7 col-sm-7 mobile-frndly-img"><img src="{{ url('/lib/img/complete-support-img.jpg') }}" alt="" title=""></div>
            <div class="col-lg-5 col-md-5 col-sm-5 cntnt-post-two cntnt-post-four">
                <h3>24x7 Complete Support</h3>
                <span>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</span>
                <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. </p>
            </div>
        </div>
    </div>
</section>



<div id="pricing" class="product-pricng">
    <div class="container">

        <div class="PageTitle">
            <div class="col-md-12 col-lg-12 col-sm-12 cntnt-hdng">PRODUCT PACKAGES
                <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s<br>
                    dfs sit atmet sit dolor greand fdanrh sdfs </p>
            </div>
        </div>
        <div id="pricingTable">   
            @foreach($plans as $plan)

            <div class="col-lg-3 colStart">
                <div class="col1">
                    <h3>{{ $plan->plan_name }}</h3>
                    <p>{{ ($plan->id==1)  ? 'Free' : '$' . $plan->plan_price . '/ month' }}</p>
                </div>	
                <div class="row1">{{$plan->max_products}} Products</div>
                <div class="row1">{{$plan->max_product_images}} image per product</div>
                <div class="row1">{{$plan->custom_pages}} custom page</div>
                <div class="row1">Quickmerch.com URL</div>

                <a href="{{ url('/auth/signup') }}" class="btn btn-secondary btn-block">Get started</a>
            </div>
            @endforeach        
        </div>
        <div class="clear"></div>
    </div>
</div>




<div class="testimonials">
    <div class="container">
        <h3>The happiest customers</h3>
        <div class="col-md-4 col-lg-4 col-sm-4 testimonial-post">
            <img src="{{ url('/lib/img/testimonial-img1.png') }}" alt="">
            <h2>Cara Simpson</h2>
            <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs dolor sit atmet sit dolor</p>
            <span>Lorem ipsum dolor</span>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-4 testimonial-post">
            <img src="{{ url('/lib/img/testimonial-img2.png') }}" alt="">
            <h2>Zak Holdworth</h2>
            <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs dolor sit atmet sit dolor</p>
            <span>Lorem ipsum dolor</span>
        </div>

        <div class="col-md-4 col-lg-4 col-sm-4 testimonial-post">
            <img src="{{ url('/lib/img/testimonial-img3.png') }}" alt="">
            <h2>Cristiana Brodbeck</h2>
            <p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs dolor sit atmet sit dolor</p>
            <span>Lorem ipsum dolor</span>
        </div>

    </div>
</div>


<div class="create-store-sctn">
    <div class="container">
        <h3>Create Your Store Now!</h3>
        <span>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs dolor sit atmet sit dolor</span>
        <p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
        <a href="{{ url('/auth/signup') }}" class="search-btn btn" style="padding-top: 16px; font-family: inherit;">FREE 14 DAY TRIAL</a>
    </div>
</div>


@endsection