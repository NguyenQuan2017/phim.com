<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\UserRepository as Users;
use App\Models\User;

class UserController extends Controller
{
	private $users;

    public function  __construct(Users $users){

        $this->users=$users;
    }

    public function index(){

        $users=$this->users->all(); 

        return view('admin/user/list',compact('users'));
    }

    public function show($id){
        $users=$this->users->find($id);
        return view('admin/user/edit',compact('users'));
    }
 public function update(Request $request, $id)
    {
        $users = $this->users->visible('id',$request->user_id);

        try {
            $dataUpdate = $request->only('name', 'email','username','avatar','level');  
            $result = $this->users->update($dataUpdate, $id);

            if ($result) {
                return redirect('admin/user/list')
                    ->with('status', 'Successfull!');
            }
        } catch (Exception $e) {
            Log::error($e);

            return back()->withErrors('Update failed!');
        }
    }


    public function destroy($id)
    {
       $users=User::findOrFail($id);
       $users->delete($id);

       return redirect('admin/user/list');
    }
}
