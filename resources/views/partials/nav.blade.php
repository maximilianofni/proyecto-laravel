<a href="/">inicio</a>
@auth
<a href="/dashboard">Dashboard</a>
<!-- <a href="$">Logout</a> -->
<form style="display: inline" action="/logout" method="POST">
@csrf
<a href="#" onclick="this.closest('form').submit()"> Logout </a>
</form>

@else
<a href="/login">Login</a>
@endauth

@if(session('status'))
    <br>
    {{ session('status') }}
@endif