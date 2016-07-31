<?php

namespace SACRV\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Redirect;
use SACRV\Http\Requests;
use SACRV\Http\Requests\UserCreateRequest;
use SACRV\Http\Requests\UserUpdateRequest;
use \SACRV\Persona;
use \SACRV\Rol;
use \SACRV\Cuenta;
use Illuminate\Routing\Route;


//use \SACRV\Models\Usuario\usuario;
use DB;

//para ver los métodos para el controlador
//php artisan route:list


//Para ver las validaciones en laravel
//  php artisan make:request NombreValidaciones
class Usuario extends Controller
{
/*    public function __construct(){
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->cta = Cuenta::find($route->getParameter('usuario'));   
        return $this->cta;
    }
*/
    public function index(){
        $cuentas=Cuenta::paginate(7);;
        return view('administrador.listar_usuarios',compact('cuentas'));
    }

    public function create(){
    	return view('administrador.registrar_usuario');
    }

    public function store(UserCreateRequest $request){
        $contador=0;
    	\SACRV\Persona::create([
    		'nombres'=> $request['nombres'],
    		'apellidos'=> $request['apellidos'],
    		'cedula'=> $request['cedula'],
    		'direccion'=> $request['direccion'],
    		'cargo'=> $request['cargo'],
    		'email'=> $request['email'],
    		'horaEntrada'=> $request['horaEntrada'],
    		'horaSalida'=> $request['horaSalida'],
        ]);

    	$descrip="El usuario Propietario es toda persona cuyo vehículo ha sido objeto de retención; su registro en el sistema se da automáticamente cuando el Agente del  CRV ingresa el vehículo. Este usuario tiene a su cargo: Gestionar proceso de devolución";
    		if ($request['nombre'] == 'administrador') {
    			$descrip="El administrador del Sistema tiene a su cargo el: 1. Administrar usuarios (crear, modificar y dar de baja a usuarios del sistema); y 2.Parametrizar el sistema (establecer costos de garaje y traslado de la grúa institucional).";
    		}elseif ($request['nombre']=="unidadTransito") {
    			$descrip="El usuario Unidad de Tránsito es toda persona que labora en la UMTTTSV y que cuyo registro en el sistema ha sido concedido por su administrado. Este usuario tiene a su cargo: 1. Gestionar permanencia de vehículos;  2. Gestionar devolución de vehículos; y 3. Gestionar reportes";
    		}elseif ($request['nombre']=="agenteCRV") {
    			$descrip="El usuario Agente del CRV es toda persona que es un agente de tránsito y está encargado de la custodia del CRV. Su registro en el sistema ha sido concedido por su administrador. Este usuario tiene a su cargo: 1 Gestionar ingreso de vehículos; y 2.Gestionar permanencia de vehículos.";
    		}elseif ($request['nombre']=="encargadoCRV") {
    			$descrip="El usuario Encargado del CRV es toda persona que figura como jefe del CRV y tiene a su responsabilidad todas las operaciones de dicho Centro de Retención Vehicular. Su registro en el sistema ha sido concedido por su administrador. Este usuario tiene a su cargo: 1. Gestionar permanencia de vehículos; 2. Gestionar ingreso de vehículos; 3. Gestionar proceso de devolución; 4. Gestionar devolución de vehículos;  y 5. Gestionar reportes";
    		} 
        $rolId = DB::table('rols')->where('nombre', $request["nombre"])->first();
        if(is_null($rolId)){
            \SACRV\Rol::create([
                'nombre'=> $request['nombre'],
                'descripcion'=> $descrip,
            ]);  
        }
    
        $idPersona = DB::table('personas')->where('cedula', $request['cedula'])->first();
        if(is_null($idPersona)){
            $ultimoRegistro= Persona::all();
            if(!is_null($ultimoRegistro)){
                Persona::destroy($ultimoRegistro->last());    
            }
//            App:abort(404);
        }
        $rolIdActualizado = DB::table('rols')->where('nombre', $request["nombre"])->first();
        \SACRV\Cuenta::create([
            'userName'=> $request['userName'],
            'pass'=> $request['pass'],
            'persona_id'=>$idPersona->id,
            'rol_id'=>$rolIdActualizado->id,
        ]);
        Session::flash('message','Usuario registrado existosamente');
        return Redirect::to('/usuario');

    }       

    public function edit($id){ //el id recibido es el de la cuenta del usuario
        $cta = Cuenta::find($id); //obtener la fila completa del id solicitado

        //http://www.cristalab.com/tutoriales/modulo-de-usuarios-vi-editar-un-registro-con-laravel-c111683l/

        $soloPersona = Persona::find($cta->persona_id);
        if(is_null($soloPersona)){
            App:abort(404);
        }

        $usuario = DB :: table ( 'cuentas' ) 
            -> join ( 'personas' ,  'cuentas.persona_id' ,  '=' ,  'personas.id' ) 
            -> join ( 'rols' ,  'cuentas.rol_id' ,  '=' ,  'rols.id' ) 
            ->where('personas.cedula',$soloPersona->cedula )->first();

        return view('administrador.modificar_usuario', ['usuario'=>$usuario]); //, ['cta'=>$cta]);
    }

    public function update($id, UserUpdateRequest $request){ //esta recibiendo el id de la cta
//        $cta = Cuenta::findOrFail($id);
        $cta = Cuenta::find($id);
        $persona= Persona::find($cta->persona_id);
        $persona->update($request->all());
        //$persona->fill($request->all())->save();

            /*        $todosRoles= Rol::All();
                    $soloRol= Rol::find($cta->rol_id);
                    $bandExisteRol=false;
                    foreach ($todosRoles as $unicoRol) {
                        if ($unicoRol->nombre == $soloRol->nombre) {
                            $bandExisteRol=true;
                        }    
                    }
                    if($bandExisteRol==false){
                        $soloRol->fill($request->all());
                        $soloRol->save();
                    }
*/

        $soloCuenta= Cuenta::find($id);
        $idrol = DB::table('rols')->where('nombre', $request["nombre"])->first();

        $soloCuenta->fill(array(
        'userName'=> $request['userName'],
            'pass'=> $request['pass'],
            'rol_id'=>$idrol->id,
        ));
        $soloCuenta->save();
        Session::flash('message','Usuario modificado existosamente');
        return Redirect::to('/usuario');
    }
  
    //http://www.cristalab.com/tutoriales/modulo-de-usuarios-vii-eliminar-un-registro-con-laravel-c111925l/
    public function destroy($id){
        $cta = Cuenta::find($id);   
/*        Cuenta::destroy($id);
        Persona::destroy($cta->persona_id);

        if (Request::ajax()) {
            return Response::json(array (
                'success' => true,
                'msg'     => 'Usuario ' . $cta->full_name . ' eliminado',
                'id'      => $cta->id
            ));
        }else         {
            Session::flash('message','Usuario eliminado existosamente');
            return Redirect::to('/usuario');
        }
    }
*/
    //soft deleting https://laravel.com/docs/5.2/eloquent#soft-deleting
        $cta->delete();
//        $person=Persona::find($cta->persona_id);
//        $person->delete();

        if (Request::ajax()) {
            return Response::json(array (
                'success' => true,
                'msg'     => 'Usuario ' . $cta->full_name . ' eliminado',
                'id'      => $cta->id
            ));
        }else         {
            Session::flash('message','Usuario eliminado existosamente');
            return Redirect::to('/usuario');
        }
    }
}