<?php

namespace App\Http\Controllers;

use App\ChildrenInfo;
use App\Districts;
use App\Province;
use App\Municipality;
use Illuminate\Http\Request;
use Session;
use Auth;
use Validator;

class ChildrenInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $childs = ChildrenInfo::get();
        return view('children_info.index',compact('childs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = Districts::get();
        $provinces = Province::get();
        $municipalities = Municipality::get();
        return view('children_info.create',compact('districts','provinces','municipalities'));
    }

    /**
     * 
     * 






     
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request()->validate([
        //         'parent_name'=>'required',
        //     'child_id'=>'required',
        //     'email'=>'required',
        //     'gender'=>'required',
        //     'dob'=>'required',
        //     'ward_no'=>'required',
        //     'municipality'=>'required',
        //     'district'=>'required',
        //     'province'=>'required',
        //     'birth_at'=>'required',
        //     'delivery_time'=>'required',
        //     'birth_time'=>'required'
        // ]);
        $childs = ChildrenInfo::create([

           'parent_name' => request('parent_name'),
           'child_name' => request('child_name'),
           'child_id' => request('child_id'),
           'email' => request('email'),
           'gender' => request('gender'),
           'dob' => request('dob'),
           'birth_time' => request('birth_time'),
           'ward_no' => request('ward_no'),
           'municipality' => request('municipality'),
           'district' => request('district'),
           'province' => request('province'),
           'birth_at' => request('birth_at'),
           'delivery_type' => request('delivery_type')
        ]);
        return view('children_info.index',compact('childs'))->with('flash_message_success','Inforamtion added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChildrenInfo  $childrenInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ChildrenInfo $childrenInfo)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChildrenInfo  $childrenInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $child = ChildrenInfo::findorFail($id);
        $districts = Districts::get();
        $provinces = Province::get();
        $municipalities = Municipality::get();
       return view('children_info.edit',compact('child','districts','provinces','municipalities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChildrenInfo  $childrenInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            
        ]);
        $data = ChildrenInfo::findorFail($id);
        if(empty($data['child_name']))
            {
                $data['child_name']='';
            }
        $data['parent_name'] = $request->parent_name;
        // $data['child_name'] = $request->child_name;
        $data['child_id'] = $request->child_id;
        $data['email'] = $request->email;
        $data['gender'] = $request->gender;
        $data['birth_time'] = $request->birth_time;
        $data['dob'] = $request->dob;
        $data['ward_no'] = $request->ward_no;
        $data['municipality'] = $request->municipality;
        $data['province'] = $request->province;
        $data['district'] = $request->district;
        $data['birth_at'] = $request->birth_at;
        $data['delivery_type'] = $request->delivery_type;
        $data->save();
        return redirect()->route('children.index')->with('flash_message_success','Information Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChildrenInfo  $childrenInfo
     * @return \Illuminate\Http\Response
     */

    public function preview($id){

        $child = ChildrenInfo::findorFail($id);

        return view('children_info.preview',compact('child'));
    }

    public function destroy($id)
    {
        $childs = ChildrenInfo::findorFail($id);
        $childs->delete();
        return redirect()->route('children.index')->with('flash_message_success','Information deleted successfully');
    }
}
