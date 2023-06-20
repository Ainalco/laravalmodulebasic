<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $users=User::all();
        return view('users::index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('users::userform');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        
        $data = request()->validate([
           'firstname' => '',
           'lastname' => '',
           'email' => '',
           'password' => '',
           'about' => '',
           'status' => '',
           'counter' =>'',
       ]);
       $data['password'] = Hash::make($request->password);
        $user=User::create($data);
        $user->addMedia($request->image)->toMediaCollection();

        return redirect()->route('user.userlist')->with('success','User added successfully.');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('users::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $user= User::where('id',$id)->first();
        return view('users::usereditform',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
       
        $data = request()->validate([
            'firstname' => '',
            'lastname' => '',
            'email' => '',
            'password' => '',
            'about' => '',
            'status' => '',
            'counter' =>'',
        ]);
        $user = User::find($id);
        if(isset($request->password)){           
            $data['password'] = Hash::make($request->password);
        }else{           
            $data['password'] = $user->password;
        }
        $mediaItem = $user->getMedia();
        foreach($mediaItem as $item) {
            //if($item->id == $photoId) {
                $item->delete();
            //}
        }
        $user->update($data);
        $user->addMedia($request->image)->toMediaCollection();  
         return redirect()->route('user.userlist')->with('success','User added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
