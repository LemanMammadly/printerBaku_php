<section class="items-product1 pt-30">
    <div class="container">
        <div class="row">
            @foreach ($categories as $cat)
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" style="width: 25%">
                <div class="single-items mb-20" style="width: 100%;height:100%">
                    <div class="items-img" style="height: 100%">
                        <img style="width: 100%;height:100%;object-fit:cover;" src="{{$cat->image}}" alt="">
                    </div>
                    <div class="items-details">
                        <h4><a href="pro-details.html">{{$cat->name}}</a></h4>
                        <a href="pro-details.html" class="browse-btn">{{ LaravelLocalization::getCurrentLocaleName() == "English" ? 'Shop Now' : 'İndi Alış-veriş Et'}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
