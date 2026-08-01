@extends('layouts.app')

@section('page_title', 'الأقسام')

@section('page_actions')
    <a href="{{ route('departments.create') }}" class="btn btn-primary">+ إضافة قسم</a>
@endsection

@section('content')
    @php
        $departments = [
            ['name' => 'الإدارة', 'employees' => 12],
            ['name' => 'التقنية', 'employees' => 35],
            ['name' => 'المالية', 'employees' => 18],
        ];
    @endphp

    <section class="card">
        <div class="card-head">
            <h3>قائمة الأقسام</h3>
            <span>عرض تجريبي</span>
        </div>

        <div class="grid three-col">
            @foreach($departments as $department)
                <article class="mini-card">
                    <h4>{{ $department['name'] }}</h4>
                    <p>{{ $department['employees'] }} موظف</p>
                    <div class="form-actions">
                        <button class="btn btn-small">تعديل</button>
                        <button class="btn btn-small btn-danger confirm-delete">حذف</button>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
