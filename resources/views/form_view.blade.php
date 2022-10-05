<div>
    <form action="form_submit" method="get">
        {{ @csrf_field() }}
        <input type="text" name="name" placeholder="Name"> <br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="submit" name="submit">
    </form>
</div>