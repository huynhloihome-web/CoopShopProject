<x-coop-layout :title="$pageTitle">
    <div class="shop-page">
        <x-category-sidebar />

        <section class="featured-products">
            <div class="section-heading">
                <h1>Sản phẩm nổi bật</h1>

                <a href="javascript:void(0)" class="see-all">
                    Xem tất cả
                    <i class="bi bi-chevron-right"></i>
                </a>
            </div>

            <div class="product-grid">
                @for ($i = 0; $i < 6; $i++)
                    <x-product-card />
                @endfor
            </div>
        </section>
    </div>
</x-coop-layout>