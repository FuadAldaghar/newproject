@extends('layouts.app')

@section('page_title', 'تعديل وظيفة')

@section('content')
    <section class="card form-card">
        <h3>تعديل بيانات الوظيفة</h3>
        <form>
            <div class="form-grid">
                <label>اسم الوظيفة<input type="text" value="مهندس برمجيات"></label>
                <label>القسم<select><option selected>التقنية</option><option>الإدارة</option><option>المالية</option></select></label>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">تحديث</button>
                <a href="{{ route('positions.index') }}" class="btn">إلغاء</a>
            </div>
        </form>
    </section>
@endsection
