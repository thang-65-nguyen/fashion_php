<?php
namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AdminUserController extends Controller
{
public function index()
{
$viewData = [];
$viewData["user"] = User::paginate(5);
return view('admin.user.index',$viewData);
}
public function store(Request $request)
{
    $request->validate([
        "name" => "required|max:255",
        "email" => "required",
        "password" => "required",
        'role' => 'required',
        'balance'=>'required',
    ]);
    $newUser = new User();
    $newUser->setName($request->input('name'));
    $newUser->setEmail($request->input('email'));
    $newUser->setPassword($request->input('password'));
    $newUser->setRole($request->input('role'));
    $newUser->setBalance($request->input('balance'));
    $newUser->save();
    return back();
}
public function delete($id)
{
    User::destroy($id);
    return back();
}
public function edit($id)
    {
        $viewData = [];
        $viewData["user"] = User::findOrFail($id);
        return view('admin.user.edit')->with("viewData", $viewData);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|max:255",
            "email" => "required",
            "password" => "required",
            'role' => 'required',
            'balance'=>'required',
        ]);
        $users = User::findOrFail($id);
        $users->setName($request->input('name'));
        $users->setEmail($request->input('email'));
        $users->setPassword($request->input('password'));
        $users->setRole($request->input('role'));
        $users->save();
        return redirect()->route('admin.user.index');
    }
}