<h1>Tölts ki a mezőket</h1>
@if( $errors->any())
<ul>

    @foreach($errors->all()ad $error)
    <li>
        {{$error}}
    </li>
    @endforeach

</ul>
@endif



<form action="Animals" method="post">
    {{csrf_field()}}
    <p>
        <label for=""> Kutya </label>
        <input type="text" name="Dog" placeholder="Kutya">
    </p>
    <p>
        <label for=""> Macska </label>
        <input type="text" name="Cat" placeholder="Macska">
    </p>
    <p>
        <label for=""> Madár </label>
        <input type="text" name="Bird" placeholder="Madár">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>