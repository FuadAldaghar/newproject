@extends('layouts.app')

@section('page_title', 'تفاصيل الموظف')

@section('content')
    <section class="card profile-card">
        <div class="profile-header">
            <div class="avatar">MA</div>
            <div>
                <h3>محمود علي</h3>
                <p>مهندس برمجيات · قسم التقنية</p>
            </div>
        </div>

        <div class="profile-info">
            <div>
                <strong>البريد</strong>
                <p>mahmoud@example.com</p>
            </div>
            <div>
                <strong>الحالة</strong>
                <p>نشط</p>
            </div>
            <div>
                <strong>تاريخ التعيين</strong>
                <p>2021/03/10</p>
            </div>
        </div>

        <div class="form-actions">
            <a href="{{ route('employees.index') }}" class="btn">العودة للقائمة</a>
            <a href="{{ route('employees.edit', ['employee' => 2]) }}" class="btn btn-primary">تعديل</a>
        </div>
    </section>
@endsection
