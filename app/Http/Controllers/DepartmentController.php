<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $departments = Department::all();
        return view('departments.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{//التحقق من صحة البيانات المدخلة
    $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'status' => 'required',
    ]);
//إنشاء قسم جديد في قاعدة البيانات
    Department::create([
        'name' => $request->name,
        'description' => $request->description,
        'status' => $request->status,
    ]);
//إعادة التوجيه إلى صفحة عرض الأقسام مع رسالة نجاح
    return redirect()
        ->route('departments.index')
        ->with('success', 'تم إضافة القسم بنجاح');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $department = Department::findOrFail($id);
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //
         $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'status' => 'required',
    ]);

    $department = Department::findOrFail($id);
    $department->update([
        'name' => $request->name,
        'description' => $request->description,
        'status' => $request->status,
    ]);

    return redirect()
        ->route('departments.index')
        ->with('success', 'تم تحديث بيانات القسم بنجاح');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Department::destroy($id);
        return redirect()
            ->route('departments.index')
            ->with('success', 'تم حذف القسم بنجاح');
    }
}
