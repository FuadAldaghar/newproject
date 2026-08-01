@extends('layouts.app')

@section('page_title', 'الموظفون')

@section('page_actions')
    <a href="{{ route('employees.create') }}" class="btn btn-primary">+ إضافة موظف</a>
@endsection

@section('content')
    @php
        $employees = [
            ['id' => 1, 'name' => 'سارة أحمد', 'email' => 'sara@example.com', 'department' => 'الإدارة', 'position' => 'مساعد إداري', 'status' => 'نشط'],
            ['id' => 2, 'name' => 'محمود علي', 'email' => 'mahmoud@example.com', 'department' => 'التقنية', 'position' => 'مهندس برمجيات', 'status' => 'نشط'],
            ['id' => 3, 'name' => 'ليلى سالم', 'email' => 'leila@example.com', 'department' => 'المالية', 'position' => 'محلل بيانات', 'status' => 'في الإجازة'],
        ];
    @endphp

    <section class="card">
        <div class="card-head">
            <h3>قائمة الموظفين</h3>
            <span>عرض تجريبي للواجهة</span>
        </div>

        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>البريد</th>
                        <th>القسم</th>
                        <th>الوظيفة</th>
                        <th>الحالة</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee['id'] }}</td>
                            <td>{{ $employee['name'] }}</td>
                            <td>{{ $employee['email'] }}</td>
                            <td>{{ $employee['department'] }}</td>
                            <td>{{ $employee['position'] }}</td>
                            <td><span class="status-badge {{ strtolower($employee['status']) == 'نشط' ? 'active' : 'pending' }}">{{ $employee['status'] }}</span></td>
                            <td>
                                <div class="action-group">
                                    <a href="{{ route('employees.show', ['employee' => $employee['id']]) }}" class="btn btn-small">عرض</a>
                                    <a href="{{ route('employees.edit', ['employee' => $employee['id']]) }}" class="btn btn-small">تعديل</a>
                                    <button type="button" class="btn btn-small btn-danger confirm-delete">حذف</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
