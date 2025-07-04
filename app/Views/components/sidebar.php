<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == '') ? '' : 'collapsed' ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'keranjang') ? '' : 'collapsed' ?>" href="keranjang">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li><!-- End Keranjang Nav -->

        <!-- Menu untuk SEMUA role (admin & user) -->
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'profile') ? '' : 'collapsed' ?>" href="profile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Nav -->

        <!-- Menu KHUSUS untuk admin -->
        <?php if (session()->get('role') == 'admin'): ?>
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'produk') ? '' : 'collapsed' ?>" href="produk">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li><!-- End Produk Nav -->

            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'diskon') ? '' : 'collapsed' ?>" href="diskon">
                    <i class="bi bi-cash-coin"></i>
                    <span>Diskon</span>
                </a>
            </li><!-- End Diskon Nav -->

            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'product_category') ? '' : 'collapsed' ?>" href="product_category">
                    <i class="bi bi-receipt"></i>
                    <span>Produk Kategori</span>
                </a>
            </li><!-- End Produk Kategori Nav -->

            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'faq') ? '' : 'collapsed' ?>" href="faq">
                    <i class="bi bi-question-circle"></i>
                    <span>F.A.Q</span>
                </a>
            </li><!-- End F.A.Q Nav -->
        <?php endif; ?>
        
    </ul>

</aside><!-- End Sidebar-->
