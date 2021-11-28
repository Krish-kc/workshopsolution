@extends('layouts.app')

@section('content')

 <form action="/admin/workshop/delete" method="post">
                        @csrf
    <div>
            <input type="name" name="user_name">
            <input type="number" name="user_id">        
    
<button type="submit">submit</button></div>
 
</form>
@endsection
