<?php
session_start();
session_destroy();
header('Location:index.php');
//remover os indices de sessão
//unset()

//destruir a variavel de sessão
//session_detroy()

?>;
