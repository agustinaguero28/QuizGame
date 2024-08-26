<?php include_once('layout/header.php'); ?>
    

<form action="quiz.php" method="POST">
<button class="button is-success is-rounded" type="submit" name="modo" value="facil">Facil</button>
<button class="button is-info is-rounded" type="submit" name="modo" value="medio">Medio</button>
<button class="button is-danger is-rounded" type="submit" name="modo" value="dificil">Dificil</button>
<button class="button is-danger is-outlined" type="submit" name="modo" value="ilimitado">Ilimitado</button>
</form>


<?php include_once('layout/footer.php'); ?>


