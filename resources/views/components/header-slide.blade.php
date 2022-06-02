<!-- Slider main container -->
<div {!! config('app.locale') === 'ar' ? 'dir="rtl"' : null !!} class="swiper" id="header-slide">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <img data-src="{{ asset('images/hair-3.jpg') }}" class="swiper-lazy" />
            <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
            <div class="swiper-card">
                <div>
                    <h1>{!! __('header-slide.swiper-card-title') !!}</h1>
                    <h2>{!! __('header-slide.swiper-card-desc') !!}</h2>
                </div>
                <div>
                    <p>{!! __('header-slide.swiper-card-1-text') !!}</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <img data-src="{{ asset('images/hair-3.webp') }}" class="swiper-lazy" />
            <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
            <div class="swiper-card">
                <div>
                    <h1>{!! __('header-slide.swiper-card-title') !!}</h1>
                    <h2>{!! __('header-slide.swiper-card-desc') !!}</h2>
                </div>
                <div>
                    <p>{!! __('header-slide.swiper-card-2-text') !!}</p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <img data-src="{{ asset('images/hair-2.jpg') }}"
                class="swiper-lazy" />
            <div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div>
            <div class="swiper-card">
                <div>
                    <h1>{!! __('header-slide.swiper-card-title') !!}</h1>
                    <h2>{!! __('header-slide.swiper-card-desc') !!}</h2>
                </div>
                <div>
                    <p>{!! __('header-slide.swiper-card-3-text') !!}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
