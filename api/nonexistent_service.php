<?php
/*
   API: [nonexistent service]
        [returns in json format, an incorrect call from a non-existent service]
   ***
   06/30/2020 - Roger Maia - Creation
   **
*/
header("Content-type: application/json; charset=utf-8");
Define('NOT_CHECK_USER_TOKEN', 1);
echo "serviço não encontrado";


