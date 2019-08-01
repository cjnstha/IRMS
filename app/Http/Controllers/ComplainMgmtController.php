<?php

namespace App\Http\Controllers;

use App\ComplainMgmt;
use Illuminate\Http\Request;

class ComplainMgmtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complain = ComplainMgmt::get();
        return view('complain_mgmt.index',compact('complain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaccination_gaps = ['Regular','Irregular'];
        return view('complain_mgmt.create',compact('vaccination_gaps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'children_id' => 'required', 
            'vaccination_date' => 'required',
            'vaccination_name' => 'required',
            'vaccination_gap' => 'required',
            'issues'=> 'required'

        ]);
        $complains = ComplainMgmt::create([
            'children_id' => request('children_id'),
            'vaccination_date' => request('vaccination_date'),
            'vaccination_name' => request('vaccination_name'),
            'vaccination_gap' => request('vaccination_gap'),
            'issues'=> request('issues'),
        ]);
        return redirect()->route(('complain.index'),compact('complains'))->with('flash_message_success','Complain Registered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComplainMgmt  $complainMgmt
     * @return \Illuminate\Http\Response
     */
    public function show(ComplainMgmt $complainMgmt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComplainMgmt  $complainMgmt
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complain = ComplainMgmt::findorFail($id);
        $vaccination_gaps = ['Regular','Irregular'];
        return view('complain_mgmt.edit',compact('complain','vaccination_gaps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComplainMgmt  $complainMgmt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'children_id' => 'required', 
            'vaccination_date' => 'required',
            'vaccination_name' => 'required',
            'vaccination_gap' => 'required',
            'issues'=> 'required'

        ]);
        $complain = ComplainMgmt::findorFail($id);
        $complains = $complain->update([
            'children_id' => request('children_id'),
            'vaccination_name' => request('vaccination_name'),
            'vaccination_date'=> request('vaccination_date'),
            'vaccination_gap' => request('vaccination_gap'),
            'issues' => request('issues')
        ]);
        return redirect()->route(('complain.index'),compact('complains'))->with('flash_message_success','Complain updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComplainMgmt  $complainMgmt
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $complain = ComplainMgmt::findorFail($id);
        $complain->delete();
        return redirect()->back()->with('flash_message_success','Complain Deleted Successfully');

    }

    public function filterSearch(Request $request){

        $obj = (new ComplainMgmt)->newQuery(); 

        if($request->has('vacci_name')){
            $name = request('vacci_name');
            $obj = $obj->where('vaccination_name', '=', $name);
        }

        if($request->has('vacci_date')){
            $vaccination_datein = request('vacci_date');
            $obj = $obj->where('vaccination_date', '=', $vaccination_datein);
        }
        
        if($request->has('child_id')){
            $child = request('child_id');
            $obj = $obj->where('children_id', '=', $child);
        }

        $search = $obj->get();

        $html = ' ';
        $root_url = url('/');
        $baseurl = $root_url.'/complain/';
        foreach ($search as $key => $complain) {
            $key =$key+1;


            $html .= '<tr>
            <td>'. $key .'</td>
            <td>'. $complain->children_id .'</td>
            <td>'. $complain->vaccination_name .'</td>
            <td>' .$complain->vaccination_date .'</td>
            <td>'. '<a href="'. $baseurl .'edit/'. $complain->id.'" class="action-btns"> 
            <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <form method="GET" action="'. $baseurl .'delete/'. $complain->id.'">
            <input name="_method" type="hidden" value="DELETE">
            <input name="_token" type="hidden" value="'.$request->get('_token').'">
            <a href="javascript:void(0);" class="action-btns submit">
            <span class="glyphicon glyphicon-trash"></span>
            </a>
            <a target="_blank" href="'. $baseurl .'preview/'. $complain->id.'" class="action-btns"> 
            <span class="glyphicon glyphicon-eye-open"></span>
            </a>
            </form>
            </td>
            </tr>';

        }
        $table_starting = '<table class="dataTableClass table table-striped table-bordered c-blue table-picker dataTable no-footer tbl_complain">
        <thead>
        <tr>
        <th>ID</th>
        <th>Children Id</th>
        <th>Vaccination Name </th>
        <th>Vaccination Date</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>';
        $table_end = '</tbody><table>';

        $data['html'] = $table_starting. $html. $table_end;
        $count = strlen($data['html']);
        if($count<5){

            $data['html']  = $table_starting. '<tr><td colspan="9"> No Data Available</td><tr>'. $table_end; 
        }
        
        
        return $data;
    }
}
