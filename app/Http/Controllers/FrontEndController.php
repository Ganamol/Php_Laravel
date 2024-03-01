<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class FrontEndController extends Controller
{
    public function homepage()
    {
        $users=User::all();
        return view('welcome',compact('users'));
    }
    public function aboutus()
    {


        
        //   return $users;
        
        // $users=User::find(1);
        // return $users;

    //    $user= User::where('id','=',1)->first();
    //     return $user->name;

        // $user= User::where('id','=',2)->get();
        // return $user[0]->email;

        // $user= User::whereIn('id',[1,3])->get();
        // return $user;

        $user=User::where('status',0)->get();
        return $user;

        return view('about-us');
    }
    public function registration()
    {
        return view('reg');
    }

public function create()
{
    session()->put('user_name','Anu');
    session()->put('user_id','1');
    return view('user.create');
}
public function save()
{   session()->get('user_name');
  
    User::create([
        'name' => request('name'),
        'email'=>request('email'),
        'password'=>request('password'),
        'dob'=>request('dob'),
        'status'=>request('status'),
    ]);

    // return 'form submit';
    //check email 

//   $user=User::firstOrCreate([
//     'email'=>request('email')
//       ],[
//         'name' => request('name'),
//         'dob'=>request('dob'),
//         'status'=>request('status'),
//   ]);



//    $user=User::updateOrCreate([
//     'email'=>request('email')
//       ],[
//         'name' => request('name'),
//         'dob'=>request('dob'),
//         'status'=>request('status'),
//   ]);
 

    return 'form submit';
    return redirect()->route('welcome')
    ->with('message','user created successfully');
}


public function edit($userId)
{

//  $user=User::find(decrypt($userId)); 
$user=User::find($userId); 

return view('user.edit',compact('user'));
}




public function update()
{
    $userid= request('id');
   
    $user=User::find($userid);
   
    $user->id = request('id');
    $user->name = request('name');
    $user->email =request('email');
    $user->password =request('password');
    $user->dob = request('dob');
    $user->status = request('status');
    $user->update(); 
    return redirect()->route('welcome')
    ->with('message','update successfully'); 

}

public function delete($userid)

{  
  
    //  $userid= request('id');
    $user=User::find($userid);

    $user->delete();
    return redirect()->route('welcome')
    ->with('message','delete successfully');
//     $user=User::find($userid); 
// return view('user.delete',compact('user'));

}
}