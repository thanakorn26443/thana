<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Staff;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = 2;        
        $search = $request->get('search');        
        if (!empty($search)) {
        //กรณีมีข้อมูลที่ต้องการ search จะมีการใช้คำสั่ง where และ orWhere
            $staff = Staff::where('action', 'LIKE', "%$search%")
                ->orWhere('name', 'LIKE', "%$search%")
                ->orWhere('age', 'LIKE', "%$search%")
                ->orWhere('salary', 'LIKE', "%$search%")
                ->orderBy('phone', 'desc')->paginate($perPage);
                
        } else {
        //กรณีไม่มีข้อมูล search จะทำงานเหมือนเดิม
            $staffs = Staff::orderBy('id', 'desc')->paginate($perPage);
        }        
        //$covid19s = Covid19::orderBy('date', 'desc')->paginate($perPage);
        return view('staff/index' , compact('staffs') );

        //$covid19s = Covid19::orderBy('date', 'desc')->get();
        $staff = Staff::orderBy('id', 'desc')->paginate($perPage);

        return view('staff/index' , compact('staffs') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        
        Staff::create($requestData);

        return redirect('staff');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::findOrFail($id);

        return view('staff.show', compact('staff'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);

        return view('staff.edit', compact('staff'));

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
        $requestData = [
            "name" => $request->input("name"),
            "age" =>  $request->input("age"),
            "phone" =>  $request->input("phone"),
            "salary" =>  $request->input("salary"),

        ];        
        Staff::create($requestData);
        return redirect('staff');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::destroy($id);
        return redirect('staff');
    }

}
