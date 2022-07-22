<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // all sẽ lấy hết thay vì all thì paginate(n) sẽ phân trang theo n
        // $students = Students::all();
        // $students = Students::select('id','ma_sv','name','class')->get();
        $students = Students::paginate(5);
        // $show = Students::query()
        return \view('admin.student.index', \compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ma_sv' => 'required',
            'class' => 'required'
        ]);
        $data = $request->all();
        Students::create($data);
        return \redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $student)
    {
        return \view('admin.student.edit',\compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'ma_sv' => 'required',
            'class' => 'required',
        ]);
        $student = Students::find($id);
        // $data = $request->all();
        $student->name = $request->name;
        $student->ma_sv = $request->ma_sv;
        $student->class = $request->class;
        $student->save();
        // $student->update($data);
        // nếu ở đây dùng update($data) thì vẫn cần @method(PUT) ở form
        return \redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $student)
    {
        $student->delete();
        return \redirect()->route('student.index');
        //  có thể sử dụng model::destroy($student);

    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $students = Students::where('ma_sv', 'LIKE', '%' . $request->ma_sv  . '%')->get();

            if ($students) {
                foreach ($students as $key => $user) {
                    $output .= '<tr>
                    <td>' . $user->id . '</td>
                    <td>' . $user->ma_sv . '</td>
                    <td>' . $user->name . '</td>
                    <td>' . $user->class . '</td>
                    <td>
                    <a class="btn btn-primary" href="'. route('student.edit', $user->id) .'">Sửa</a>

                </td>
                    </tr>';
                }
            }

            return Response($output);
        }
    }
}
