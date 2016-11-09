
<form action="" method="get">
    <h1 align="center"> Formulário</h1>
<fieldset>
    <label for="Nome">Nome:</label>
    <input type="text" name="Nome:"><br><br>

    <label for="Email">Email:</label>
    <input type="text" name="Email:"><br><br>

    <label for="Senha">Senha:</label>
    <input type="password" name="Senha:"><br><br>


</fieldset >
    <br><br>

    <fieldset >
        <legend>Estado de humor:</legend>
        <label for="zangado">Zangado:</label>
        <input type="radio" name="zangado:"><br><br>

        <label for="triste">Triste:</label>
        <input type="radio" name="triste:"><br><br>

        <label for="feliz">Feliz: </label>
        <input type="radio" name="Feliz"><br><br>

    </fieldset>

    <fieldset >
        <legend>satisfeito com o serviço:</legend>
        Satisfeito: <input type="checkbox" value="c_op1" name="check[]"><br>
        Meio satisfeito: <input type="checkbox" value="c_op2" name="check[]"><br>
        Insatisfeito: <input type="checkbox" value="c_op3" name="check[]"><br><br><br><br>


        <label for="estado">Estado visitado:</label>
        <select name="estado">
            <option value="ac">ACRE</option>
            <option value="al">ALAGOAS</option>
            <option value="am">AMAZONAS</option>
            <option value="ap">AMAPA</option>
            <option value="ba">BAHIA</option>
            <option value="ce">CEARA</option>
            <option value="df">DISTRITO FEDERAL</option>
            <option value="rs">RIO GRANDE DO SUL</option>
            <option value="sc">SANTA CATARINA</option>

        </select><br>

    </fieldset>


    <input type="submit" class="list">
    <input type="reset" name="limpar" class="list">

</form>
