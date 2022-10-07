<h1>Customer fORM</h1>

<div>
    <form action="formSubmit" method="post">
        {{ @csrf_field() }}

        <input type="text" name="first_name">
        <input type="text" name="last_name">
        <input type="submit" name="submit">
    </form>
</div>