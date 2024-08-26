<?php
require_once('controller/functions.php');
include_once('layout/header.php');

if (isset($_POST['modo'])) {
    $dificultad = isset($_POST['modo']);

    switch ($dificultad) {
        case 'facil':
            $preguntas = get_questions('easy');

            $counter = 0;

            echo
            '<div class=card>
                <div class=card-content>
                    <p class=title>' . $preguntas[$counter]->question . '</p>
                </div>
                </div>';

            foreach ($preguntas[$counter]->incorrect_answers as $respuestas) {
                echo '<article class="message is-light">
                    <div class="message-header">
                      <button class=opcion data-correct=false>' . $respuestas . '</button>
                    </div>
                    </article>';
            };
            echo
            '<article class="message is-light">
                <div class="message-header">
                  <button class=opcion data-correct=true>' . $preguntas[$counter]->correct_answer . '</button>
                </div>
                </article>';

            break;
    }
}


?>
<script>
const opcion = document.getElementsByClassName("opcion");
const message = document.getElementsByClassName("message");


for (let i = 0; i < opcion.length; i++) {
    opcion[i].addEventListener('click', function() {
        // Desmarcar todas las opciones
        for (let j = 0; j < opcion.length; j++) {
            opcion[j].classList.remove('is-success', 'is-danger');
            opcion[j].setAttribute('disabled', 'true'); // Desactiva todos los botones

        }

        // Marcar la opción seleccionada
        const esCorrecto = this.getAttribute('data-correct') === 'true';

        if (esCorrecto) {
            message[i].classList.add('is-success');
            alert("Correcto");
        } else if(!esCorrecto){
            message[i].classList.add('is-danger');
            alert("Incorrecto");
        }
        this.setAttribute('disabled', 'true');

    });
}


</script>
<?php
include_once('layout/footer.php');
?>


