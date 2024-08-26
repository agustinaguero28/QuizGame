<?php
function get_questions(string $modo)
{
    $API_URL = "https://opentdb.com/api.php?amount=10&difficulty={$modo}";

    $result = file_get_contents($API_URL);
    $data = json_decode($result);

    return $data->results;
}

?>