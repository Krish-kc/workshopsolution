<h1>Hello</h1>
{{$id->name}}
<p>
    please click  the password reset buttton to reset your password
    <a href="{{url('reset_password/'.$id->id )}}">Reset password</a>
</p>
