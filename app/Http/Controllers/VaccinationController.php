<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VaccinationInfo;


class VaccinationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $vaccines = VaccinationInfo::get();
        $vaccine_name = VaccinationInfo::pluck('vaccination_name');
        return view('vaccination_info.index',compact('vaccines','vaccine_name'));
    }

    public function create(){
        return view('vaccination_info.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'vaccination_name'=>'required',
            'purpose'=>'required',
            'actual_date'=>'required',
            'vaccination_date'=>'required',
            'remark'=>'required',
            'status'=>'required'
        ]);

        $vaccines = VaccinationInfo::create([
           'vaccination_name' => request('vaccination_name'),
           'purpose' => request('purpose'),
           'actual_date' => request('actual_date'),
           'vaccination_date' => request('vaccination_date'),
           'remark' => request('remark'),
           'status' => request('status'),
       ]);
        return redirect()->route(('vaccination.index'),compact('vaccines'))->with('flash_message_success','Inforamtion added successfully');
    }

    public function edit($id){
        $vaccination = VaccinationInfo::findorFail($id);
        return view('vaccination_info.edit',compact('vaccination'));
    }

    public function update(Request $request, $id){
        // if($request->isMethod('post')){
        //     $data = $request->all();
        //     foreach($data['idVacc'] as $vacc){
        //         VaccinationInfo::where(['id'=>$data['idVacc']])->update(['vaccination_name'=>$data['vaccination_name'],'purpose'=>$data['purpose'],'actual_date'=>$data['actual_date'],'vaccination_date'=>$data['vaccination_date'],'remark'=>$data['remark']]);
        //     }
        //     return redirect()->back()->with('flash_message_success',"Information Updated Sucessfully!!");
        // }
        $this->validate($request, [
            'vaccination_name'=>'required',
            'purpose'=>'required',
            'actual_date'=>'required',
            'vaccination_date'=>'required',
            'remark'=>'required',
            'status'=>'required'
        ]);
        $data = VaccinationInfo::findorFail($id);
        $vaccinations = $data->update([
            'vaccination_name' => request('vaccination_name'),
            'purpose' => request('purpose'),
            'actual_date' => request('actual_date'),
            'vaccination_date' => request('vaccination_date'),
            'remark' => request('remark'),
            'status' =>request('status')
        ]);
        return redirect()->route(('vaccination.index'),compact('vaccinations'))->with('flash_message_success','Inforamtion Updated successfully');
    }

    public function delete($id){
        $vaccine = VaccinationInfo::findorFail($id);
        $vaccine->delete();
        return redirect()->back()->with('flash_message_success','Information deleted successfully');

    }

    public function filterSearch(Request $request){

        $vaccination_name = request('vacci_name');
        $duration_from = request('duration_from');
        $duration_to = request('duration_to');

        $search = VaccinationInfo::when(!empty($vaccination_name), function ($q) use ($vaccination_name)
        {
            $q->where('vaccination_name', '=', $vaccination_name);
        })
        ->when(!empty($duration_from), function ($q) use ($duration_from)

        {
            $q->where('actual_date', '=', $duration_from);
        })
        ->when(!empty($duration_to), function ($q) use ($duration_to)

        {
            $q->where('vaccination_date', '=', $duration_to);

        })->get();
        $html = ' ';
        $root_url = url('/');
        $baseurl = $root_url.'/vaccn-info/';
        foreach ($search as $key => $vaccine) {
            $key =$key+1;


            $html .= '<tr>
            <td>'. $key .'</td>
            <td>'. $vaccine->vaccination_name .'</td>
            <td>'. $vaccine->actual_date .'</td>
            <td>' .$vaccine->vaccination_date .'</td>
            <td>'. '<a href="'. $baseurl .'edit/'. $vaccine->id.'" class="action-btns"> 
            <span class="glyphicon glyphicon-pencil"></span>
            </a>
            <form method="POST" action="'. $baseurl .'delete/'. $vaccine->id.'">
            <input name="_method" type="hidden" value="DELETE">
            <input name="_token" type="hidden" value="'.$request->get('_token').'">
            <a href="javascript:void(0);" class="action-btns submit">
            <span class="glyphicon glyphicon-trash"></span>
            </a>
            </form>
            <a target="_blank" href="'. $baseurl .'preview/'. $vaccine->id.'" class="action-btns"> 
            <span class="glyphicon glyphicon-eye-open"></span>
            </a>
            
            </td>
            </tr>';

        }
        $table_starting = '<table class=" dataTableClass table table-striped table-bordered c-blue table-picker dataTable no-footer tbl_vaccine">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Vaccination Name</th>
                                        <th>Actual Date</th>
                                        <th>Vaccination Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>';
        $table_end = '</tbody><table>';

        $data['html'] = $table_starting. $html. $table_end;
        $count = strlen($data['html']);

        if($count<4){

            $data['html']  = $table_starting. '<tr> <td colspan="9"> No Data Available</td><tr>'. $table_end; 
        }
        
        
        return $data;
    }
}
