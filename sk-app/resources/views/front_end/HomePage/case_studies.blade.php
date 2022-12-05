<div class="case-sec w-100 float-left padding-bottom">
    <div class="container">
        <div class="case-inner-sec">
            <div class="case-headings text-center" data-aos="zoom-in-down" data-aos-duration="700">
                <h5>Recently Completed</h5>
                <h2>Our Latest Case Studies</h2>
            </div>
            <div class="case-sections">
                <div class="row">
                    @foreach($case as $val)

                    <div class="col-lg-4 col-md-4 mb-4">
                        <div class="case-report position-relative">
                            <figure class="mb-0">
                                <img src="{{asset('images/case/'.$val->image)}}" alt="case-report1-img"
                                    class="img-fluid">
                            </figure>
                            <div class="case-text">
                                <span class="d-inline-block">Business, Finance</span>
                                <h4>Financial Report 2019</h4>
                            </div>
                            <div class="case-icon">
                                <a href="case-studies.html"><i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                
                </div>
            </div>
            <div class="generic-button text-center case-button">
                <a class="d-inline-block" href="case-studies.html">View All Cases</a>
            </div>
        </div>
    </div>
</div>