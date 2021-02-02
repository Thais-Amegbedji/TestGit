
<form action="page2.php" method="post">
<p>
    Nom : <input type="text" name="nom" /> </br>
    <input type="submit" value="Valider" /> </br>
    <?php echo $_POST['nom']; ?> 
</p>
</form>
