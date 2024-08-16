<div class="latest-items section-padding fix">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="nav-button">
                    <nav>
                        <div class="nav-tittle">
                            <h2>Trending This Week</h2>
                        </div>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($categories as $index => $category)
                                <a class="nav-link @if ($index === 0) active @endif"
                                    id="nav-{{ $category->id }}-tab" data-bs-toggle="tab"
                                    href="#nav-{{ $category->id }}" role="tab"
                                    aria-controls="nav-{{ $category->id }}"
                                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="tab-content" id="nav-tabContent">
            @foreach ($categories as $index => $category)
                <div class="tab-pane fade @if ($index === 0) show active @endif"
                    id="nav-{{ $category->id }}" role="tabpanel" aria-labelledby="nav-{{ $category->id }}-tab">
                    <div class="latest-items-active">
                        @foreach ($category->products as $product)
                            <div class="properties pb-30">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="">
                                            <img style="width: 100%; height: 200px; object-fit: contain;"
                                                src="{{ $product->image }}" alt="{{ $product->name }}" loading = "lazy">
                                        </a>
                                        <div class="socal_icon">
                                            <a href="#"><i class="ti-shopping-cart"></i></a>
                                            <a href="#"><i class="ti-heart"></i></a>
                                            <a href="#"><i class="ti-zoom-in"></i></a>
                                        </div>
                                    </div>

                                    <div class="properties-caption properties-caption2">
                                        <h3><a href="">{{ $product->name }}</a></h3>
                                        <div class="properties-footer">
                                            <div class="price">
                                                <span>${{ $product->price - ($product->price * $product->discount_percent) / 100 }}
                                                    <span>${{ $product->price }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('a[data-bs-toggle="tab"]');
            tabs.forEach(tab => {
                tab.addEventListener('shown.bs.tab', function() {
                    const tabContent = document.querySelector(this.getAttribute('href'));
                    const images = tabContent.querySelectorAll('img');
                    images.forEach(img => {
                        img.src = img.src;
                    });
                });
            });
        });
    </script>
@endpush
