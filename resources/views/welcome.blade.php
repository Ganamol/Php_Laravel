@extends('layout.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
<h1>welcome Page</h1>

@if(session()->has('message'))
<p>{{session()->get('message')}}</p>
@endif
  <a href="{{route('create.user')}}" style="float: right" class="btn btn-primary">NEW</a>

<table class="table">
     <thead>
       <tr> <th>Id</th>
          <th>name</th>
          <th>Dob</th>
          <th>email</th>
          <th>email</th>
       </tr>
     </thead>
     <tbody>
          @foreach ($users as $user)
          {
               <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->dob}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->status}}</td>
                    <td>
                         <a href="{{ route('edit.user',$user->id) }}" class="btn btn-warning">Edit </a>
                         {{-- {{-- <a href="{{route('edit.user',$user->user_id)}}"  class="btn btn-success">EDIT</a> --}}
                         <a href="{{ route('delete.user',$user->id) }}" class="btn btn-danger">DELETE</a></td> 
               </tr>
              
             
     
          }
               
          @endforeach
          
     </tbody>
   </table>
@endsection


   
 