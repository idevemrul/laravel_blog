<h2>Login form</h2>

<form action="registration" method="post">
    <!-- @csrf -->
    {{ @csrf_field() }}
    <input type="text" name="userName">
    <input type="email" name="userEmail">
    <input type="password" name="userPassword">
    <input type="password" name="confUserPassword">
    <input type="submit" name="submit">
</form>