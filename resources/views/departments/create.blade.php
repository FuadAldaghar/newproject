@extends('layouts.app')

@section('page_title', 'إضافة قسم')

@section('content')
    <section class="card form-card">
        <h3>إضافة قسم جديد</h3>
        <form>
            <div class="form-grid">
                <label>اسم القسم<input type="text" placeholder="أدخل اسم القسم"></label>
                <label>المدير<select><option>اختيار</option><option>سارة أحمد</option><option>محمود علي</option></select></label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">حفظ</button>
                <a href="{{ route('departments.index') }}" class="btn">إلغاء</a>
            </div>
        </form>
    </section>
@endsection
