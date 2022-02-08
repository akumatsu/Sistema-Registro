<?php

namespace App\Http\Controllers;
use App\Models\Vacaciones;
use Illuminate\Http\Request;

class VacacionesController extends Controller
{
    public function add(Request $request){

        $add = array("numero"=>$request->numero, "gerencia"=>$request->gerencia,"codigo_empleado"=>$request->codigo_empleado,
        "nombres" =>$request->nombres, "apellidos" =>$request->apellidos,"disfrutado" =>$request->disfrutado, "desde"=>$request->desde, "hasta"=>$request->hasta);
        $res = new Vacaciones($add);
        $res->save();
        return redirect()->back()->withInput()->with('succes', 'There was a failure while sending the message!');

      ;
    }

    public function view(){
        $result =Vacaciones::get();

        return view('registro.view', compact("result"));


}

public function delete($id){
    Vacaciones::where('id','=',$id)->delete();
    return redirect('view');

}
 public function Update(Request $request){

        $edit = array("numero"=>$request->numero, "gerencia"=>$request->gerencia,"codigo_empleado"=>$request->codigo_empleado,
        "nombres" =>$request->nombres, "apellidos" =>$request->apellidos,"disfrutado" =>$request->disfrutado, "desde"=>$request->desde, "hasta"=>$request->hasta);

        $update = Vacaciones::where('id','=',$request->id)->update($edit);
        return view('view');


}


public function  consulta($id)
{
    $result =Vacaciones::where('id','=',$id)->first();


    return view('registro.update',compact("result"));


}



}
