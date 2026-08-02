@extends('layouts.app')

@section('page_title', 'تعديل قسم')

@section('content')
    <section class="card form-card">
        <h3>تعديل بيانات القسم</h3>
        <form action="{{ route('departments.update', $department->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-grid">
                <label>اسم القسم<input type="text" value="{{ $department->name }}" name="name"></label>
                <label>الوصف<textarea name="description">{{ $department->description }}</textarea></label>
                <label>الحالة
                    <select name="status">
                        <option value="1" {{ $department->status ? 'selected' : '' }}>نشط</option>
                        <option value="0" {{ !$department->status ? 'selected' : '' }}>غير نشط</option>
                    </select>
                <!-- <label>المدير<select><option>محمود علي</option><option>سارة أحمد</option></select></label> -->
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">تحديث</button>
                <a href="{{ route('departments.index') }}" class="btn">إلغاء</a>
            </div>
        </form>
    </section>
@endsection
