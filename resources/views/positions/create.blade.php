@extends('layouts.app')

@section('page_title', 'إضافة وظيفة')

@section('content')
    <section class="card form-card">
        <h3>إضافة وظيفة جديدة</h3>
        <form>
            <div class="form-grid">
                <label>اسم الوظيفة<input type="text" placeholder="أدخل اسم الوظيفة"></label>
                <label>القسم<select><option>الإدارة</option><option>التقنية</option><option>المالية</option></select></label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">حفظ</button>
                <a href="{{ route('positions.index') }}" class="btn">إلغاء</a>
            </div>
        </form>
    </section>
@endsection
