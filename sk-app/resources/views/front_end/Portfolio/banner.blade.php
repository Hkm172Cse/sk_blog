@foreach($banner as $val)
<section class="sub-banner w-100 float-left shape-left shape-right d-table">
    <div class="d-table-cell align-middle">
        <div class="container">
            <div class="banner-sec position-relative text-center">
                <h1 class="d-inline-block position-relative" data-aos="fade-down" data-aos-duration="700">{{$val->name}}</h1>
                <p>{{$val->title}}</p>
                <div class="banner-button d-inline-block" data-aos="fade-up" data-aos-duration="700">
                    <a class="d-inline-block" href="./">Home</a>
                    <span>-</span>
                    <a class="d-inline-block" href="portfolio.php">{{$val->button}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="top-button position-relative">
        <a id="button" href="#" class="show"></a>
    </div>
</section>
@endforeach