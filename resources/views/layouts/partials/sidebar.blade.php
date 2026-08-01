<aside class="sidebar" id="sidebar">
    <div class="brand">
        <div class="brand-mark">HR</div>
        <div>
            <strong>HR Portal</strong>
            <p>لوحة إدارة الموظفين</p>
        </div>
    </div>

    <nav class="nav-links">
        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <span>◈</span> لوحة التحكم
        </a>
        <a href="{{ route('employees.index') }}" class="nav-link {{ request()->routeIs('employees.*') ? 'active' : '' }}">
            <span>◈</span> الموظفون
        </a>
        <a href="{{ route('departments.index') }}" class="nav-link {{ request()->routeIs('departments.*') ? 'active' : '' }}">
            <span>◈</span> الأقسام
        </a>
        <a href="{{ route('positions.index') }}" class="nav-link {{ request()->routeIs('positions.*') ? 'active' : '' }}">
            <span>◈</span> الوظائف
        </a>
        <a href="{{ route('reports.index') }}" class="nav-link {{ request()->routeIs('reports.*') ? 'active' : '' }}">
            <span>◈</span> التقارير
        </a>
    </nav>
</aside>
