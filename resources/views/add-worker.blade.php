<h1>Töltsd ki a mezőket</h1>
 
<form action="tarol-dolgozo" method="post">
    @csrf
    
    <p>
        <label for=""> Név: </label>
        <input type="text" name="name">
        <br>
    </p>
    <p>
        <label for=""> Város: </label>
        <input type="text" name="city">
        <br>
    </p>
    <p>
        <label for=""> Születés: </label>
        <input type="text" name="borndate">
        <br>
    </p>

    <p>
        <label for=""> Fizetés: </label>
        <input type="text" name="salary">
        
    </p>

    <p>
        <button type="submit">Küldés</button>
    </p>
</form>