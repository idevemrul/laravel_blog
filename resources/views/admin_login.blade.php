<h1> This is admin login page</h1>

<div>
    <form action="admin_auth" method="post">
        @csrf
        <input type="email" name="email" placeholder="Enter Email"> <br><br>
        <input type="password" name="password" placeholder="Enter Password"><br><br>
        <input type="submit" name="submit" value="Log In"> <br><br>
        <p>{{ session('invalid_user') }}</p>
    </form>
</div>