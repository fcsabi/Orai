<form action="drinks" method="post">
    {{csrf_field()}}
    <p>
        <label for="">Pálinka</label>
        <input type="text" name="Pálinka" placeholder="Pálinka">
    </p>
    <p>
        <label for="">Unicum</label>
        <input type="text" name="Unicum" placeholder="Unicum">
    </p>
    <p>
        <label for="">Vodka</label>
        <input type="text" name="Vodka" placeholder="Vodka">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>