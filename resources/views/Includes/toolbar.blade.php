

<div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100">
        <a class="d-none handheld-toolbar-item" href="#vendor-sidebar" data-bs-toggle="offcanvas">
            <span class="handheld-toolbar-icon"><i class="ci-sign-in"></i></span>
            <span class="handheld-toolbar-label">Sidebar</span>
        </a>
        <a class="d-table-cell handheld-toolbar-item"
    @if (Auth::check())
        href="{{ route('profileSetting') }}"
    @else
        href="#signin-modal" data-bs-toggle="modal"
    @endif>
    <span class="handheld-toolbar-icon"><i class="ci-user"></i></span>
    <span class="handheld-toolbar-label">حسابي</span>
</a>

        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)">
            <span class="handheld-toolbar-icon"><i class="ci-menu"></i></span>
            <span class="handheld-toolbar-label">قائمه</span>
        </a>
    </div>
</div>
