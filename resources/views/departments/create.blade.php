
@extends('layouts.app')

@section('page_title', 'إضافة قسم')

@section('content')

<section class="card form-card">

    <h3>إضافة قسم جديد</h3>

    <form action="{{ route('departments.store') }}" method="POST">

        @csrf

        <div class="form-grid">

            <label>
                اسم القسم

                <input 
                    type="text" 
                    name="name"
                    placeholder="أدخل اسم القسم"
                    required
                >
            </label>


            <label>
                الوصف

                <input 
                    type="text"
                    name="description"
                    placeholder="وصف القسم"
                >
            </label>


            <label>
                الحالة

                <select name="status">
                    <option value="1">نشط</option>
                    <option value="0">غير نشط</option>
                </select>

            </label>

        </div>


        <div class="form-actions">

            <button type="submit" class="btn btn-primary">
                حفظ
            </button>


            <a href="{{ route('departments.index') }}" class="btn">
                إلغاء
            </a>

        </div>


    </form>

</section>

@endsection




<!-- @extends('layouts.app')

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
@endsection -->
