<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Spatie\Permission\Models\Permission;
   
class PermissionController extends BaseController
{

    public function createPermission(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();

        $permission = Permission::create(['guard_name' => 'web', 'name' => $input['name']]); //create new permission
        if(!empty($permission)){
            $msg = "Permission Created successfully.";
            $success['permission'] =  $permission->name;
        }else{
            $success['permission'] =  "";
            $msg = "Failed";
        }
   
        return $this->sendResponse($success, $msg);
    }

    public function assignPermissionToUser(Request $request){
        $validator = Validator::make($request->all(), [
            'userid' => 'required',
            'permission' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();
        $user = User::where('id', $input['userid'])->first(); //get user
        if(!empty($user)){
            $user->givePermissionTo($input['permission']);

            $msg = "Assign Permission successfully.";
            $success['user'] =  $user->name;
            $success['permission'] = $input['permission'];

        }else{
            $msg = "Failed";
            $success = "";
        }
   
        return $this->sendResponse($success, $msg);
    }

    public function revokePermissionFromUser(Request $request){
        $validator = Validator::make($request->all(), [
            'userid' => 'required',
            'permission' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $input = $request->all();
        $user = User::where('id', $input['userid'])->first(); //get user

        if(!empty($user)){
            $user->revokePermissionTo($input['permission']);

            $msg = "Revoke Permission successfully.";
            $success['user'] =  $user->name;
            $success['permission'] = $input['permission'];

        }else{
            $msg = "Failed";
            $success = "";
        }
   
        return $this->sendResponse($success, $msg);
    }
}