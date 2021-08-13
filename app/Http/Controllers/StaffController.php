<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MStaff;
use App\Http\Requests\Staff\StaffAddRequest;
use App\Http\Requests\Staff\StaffEditRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class StaffController extends Controller
{
    /**
     * スタッフの一覧画面を表示する
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff_list = MStaff::getStaffList();
        return view('staff/staff_list', ['staff_list' => $staff_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff/staff_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffAddRequest $request)
    {
        $data = $request->all();

        DB::beginTransaction();
        try{
            MStaff::saveStaff($data);
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->action([StaffController::class, 'create'])->withInput()->withErrors(array('DB_ERROR'=> $e->getMessage()));
        }

        return redirect()->action([StaffController::class, 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff_data = MStaff::getStaff($id);
        return view('staff/staff_show', ['staff_data' => $staff_data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = MStaff::getStaff($id);
        return view('staff/staff_edit' ,['staff' => $staff]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StaffEditRequest $request, $id)
    {
        $data = $request->all();

        DB::beginTransaction();
        try{
            MStaff::updateStaff($data, $id);
            DB::commit();
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->action([StaffController::class, 'edit'],['staff' => $id])->withInput()->withErrors(array('DB_ERROR'=> $e->getMessage()));
        }

        return redirect()->action([StaffController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MStaff::where('id', $id)->delete();
        return redirect()->action([StaffController::class, 'index']);

    }
}
