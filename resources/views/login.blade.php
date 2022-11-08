<h1>login</h1>
<form method="post" action="/authenticate">
    @csrf
    email:<input type="text" name="email" /><br>
    password:<input type="text" name="password" /><br>
    <input type="submit" />
    @error('email')
    <span style="color:red">{{$message}}</span>
    @enderror


</form>
