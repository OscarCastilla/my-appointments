<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        
        $patients=User::patients()->paginate(5);
        return view('patients.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    private function performValidation(Request $request){

        $rules=[
            'name'=>'required|min:3',
            'email'=>'required|email',
            'dni'=>'nullable|digits:8',
            'address'=>'nullable|min:5',
            'phone'=>'nullable|min:6',
            
        ];

        $messages=[
            'name.required'=>'Es necesario ingresar un nombre',
            'name.min'=>'se requiere 3 caracteres',
            'email.required'=>'Es necesario el correo',
        
        ];

        $this->validate($request,$rules,$messages);

    }
    
    public function store(Request $request)
    {
        $this->performValidation($request);
      


        User::create($request->only('name','email','dni','address','phone')
        +[
            'role'=>'patient',
            'password'=>bcrypt($request->input('password'))
        ]
    );
    $notification='El paciente se ah registrado correctamente';
    return redirect('patients')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
   
    }


    public function edit(User $patient)
    {

     
        return view('patients.edit',compact('patient'));
        
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
        $this->performValidation($request);
      

        $user=User::patients()->findOrFail($id);

        $data=$request->only('name','email','dni','address','phone');
        $password=$request->input('password');
        
        if($password){
            $data+=['password'=>bcrypt($password)];
        
        }
        
        $user->fill($data);
        $user->save();

        
    
    $notification='El informacion del paciente se ah editado correctamente';
    return redirect('patients')->with(compact('notification'));
    //return redirect('doctors')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $patient){

        $nombrep= $patient->name;


        $patient->delete();

        $notification="El paciente $nombrep se ah eliminado con exito";


        return redirect('patients')->with(compact('notification'));
        
    }
}
