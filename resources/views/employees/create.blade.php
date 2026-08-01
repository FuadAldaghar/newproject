@extends('layouts.app')

@section('page_title', 'إضافة موظف')

@section('content')
    <section class="card form-card">
        <h3>إضافة موظف جديد</h3>
        <form>
            <div class="form-grid">
                <label>الاسم<input type="text" placeholder="أدخل الاسم"></label>
                <label>البريد<input type="email" placeholder="example@domain.com"></label>
                <label>القسم<select><option>الإدارة</option><option>التقنية</option><option>المالية</option></select></label>
                <label>الوظيفة<select><option>مساعد إداري</option><option>مهندس برمجيات</option><option>محلل بيانات</option></select></label>
                <label>الحالة<select><option>نشط</option><option>في الإجازة</option><option>متوقف</option></select></label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">حفظ</button>
                <a href="{{ route('employees.index') }}" class="btn">إلغاء</a>
            </div>
        </form>
    </section>
@endsection
