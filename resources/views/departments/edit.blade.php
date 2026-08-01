@extends('layouts.app')

@section('page_title', 'تعديل قسم')

@section('content')
    <section class="card form-card">
        <h3>تعديل بيانات القسم</h3>
        <form>
            <div class="form-grid">
                <label>اسم القسم<input type="text" value="التقنية"></label>
                <label>المدير<select><option>محمود علي</option><option>سارة أحمد</option></select></label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">تحديث</button>
                <a href="{{ route('departments.index') }}" class="btn">إلغاء</a>
            </div>
        </form>
    </section>
@endsection
