@extends('layouts.app')

@section('page_title', 'تعديل موظف')

@section('content')
    <section class="card form-card">
        <h3>تعديل بيانات الموظف</h3>
        <form>
            <div class="form-grid">
                <label>الاسم<input type="text" value="محمود علي"></label>
                <label>البريد<input type="email" value="mahmoud@example.com"></label>
                <label>القسم<select><option selected>التقنية</option><option>الإدارة</option><option>المالية</option></select></label>
                <label>الوظيفة<select><option selected>مهندس برمجيات</option><option>مساعد إداري</option><option>محلل بيانات</option></select></label>
                <label>الحالة<select><option selected>نشط</option><option>في الإجازة</option><option>متوقف</option></select></label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">تحديث</button>
                <a href="{{ route('employees.index') }}" class="btn">إلغاء</a>
            </div>
        </form>
    </section>
@endsection
