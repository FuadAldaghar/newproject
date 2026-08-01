@extends('layouts.app')

@section('page_title', 'لوحة التحكم')

@section('page_actions')
    <a href="{{ route('employees.create') }}" class="btn btn-primary">+ إضافة موظف</a>
@endsection

@section('content')
    @php
        $stats = [
            ['title' => 'عدد الموظفين', 'value' => '128', 'hint' => '+12% هذا الشهر'],
            ['title' => 'عدد الأقسام', 'value' => '8', 'hint' => '4 أقسام نشطة'],
            ['title' => 'عدد الوظائف', 'value' => '24', 'hint' => '6 وظائف جديدة'],
            ['title' => 'الموظفون النشطون', 'value' => '116', 'hint' => '90% من الإجمالي'],
        ];
    @endphp

    <section class="stats-grid">
        @foreach($stats as $stat)
            <article class="card stat-card">
                <p>{{ $stat['title'] }}</p>
                <h2>{{ $stat['value'] }}</h2>
                <span>{{ $stat['hint'] }}</span>
            </article>
        @endforeach
    </section>

    <section class="grid two-col">
        <article class="card">
            <div class="card-head">
                <h3>أحدث الموظفين</h3>
                <a href="{{ route('employees.index') }}">عرض الكل</a>
            </div>
            <ul class="list">
                <li><strong>سارة أحمد</strong><span>مساعد إداري</span></li>
                <li><strong>محمود علي</strong><span>مهندس برمجيات</span></li>
                <li><strong>ليلى سالم</strong><span>محلل بيانات</span></li>
            </ul>
        </article>

        <article class="card">
            <div class="card-head">
                <h3>الأنشطة الأخيرة</h3>
                <a href="{{ route('reports.index') }}">التقارير</a>
            </div>
            <ul class="list">
                <li>تمت إضافة 3 موظفين هذا الأسبوع</li>
                <li>تم تحديث بيانات قسم التكنولوجيا</li>
                <li>تمت مراجعة تقارير الأداء</li>
            </ul>
        </article>
    </section>
@endsection
