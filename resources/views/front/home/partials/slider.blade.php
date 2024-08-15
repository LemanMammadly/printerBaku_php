@push('css')
<style>.slider3:before {
    position: absolute;
    content: '';
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;}
</style>
@endpush
<section class="slider-area ">
    <div class="slider-active">
        @foreach ($sliders as $slider)
            <div class="single-slider slider-bg1 slider3 slider-height d-flex align-items-center"
                style="background-image: url('{{$slider->image}}');">
                <div class="container">
                    <div class="rowr">
                        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8  col-sm-10">
                            <div class="hero-caption text-center">
                                <span>{{$slider->title}}</span>
                                <p data-animation="fadeInUp" style="color: #fff; z-index:3333;" data-delay="0.4s">{{$slider->description}}</p>
                                <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp"
                                    data-delay="0.7s">{{$slider->link_btn}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
