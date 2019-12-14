<pre>
    <?php
        var_dump($_POST);

    $name = $_POST('Client');

    if($name == "Amber")
    {
        echo "Hello Creator";
    }
    else if($name == "Monica")
    {
        echo "Hello lovely!";
    }
    else
    {
        echo "Hello $name! Welcome.";
    }
    ?>
</pre>

<form method="POST">
    <label for="Client"> Client Name: </label>
    <input type="text" name="Client" id="Client">
    <br><br>
    <label for="Description"> Description: </label>
    <input type="text" name="Description" id="Description">
    <br><br>
    <label for="Address"> Address: </label>
    <input type="text" name="Address" id="Address">
    <br><br>
    <input type="submit">
</form>