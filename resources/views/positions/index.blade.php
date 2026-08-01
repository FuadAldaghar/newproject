@extends('layouts.app')

@section('page_title', 'الوظائف')

@section('page_actions')
    <a href="{{ route('positions.create') }}" class="btn btn-primary">+ إضافة وظيفة</a>
@endsection

@section('content')
    @php
        $positions = [
            ['name' => 'مدير قسم', 'department' => 'الإدارة'],
            ['name' => 'مهندس برمجيات', 'department' => 'التقنية'],
            ['name' => 'محلل بيانات', 'department' => 'المالية'],
        ];
    @endphp

    <section class="card">
        <div class="card-head">
            <h3>قائمة الوظائف</h3>
            <span>عرض تجريبي</span>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>الوظيفة</th>
                        <th>القسم</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($positions as $position)
                        <tr>
                            <td>{{ $position['name'] }}</td>
                            <td>{{ $position['department'] }}</td>
                            <td>
                                <div class="action-group">
                                    <button class="btn btn-small">تعديل</button>
                                    <button class="btn btn-small btn-danger confirm-delete">حذف</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
