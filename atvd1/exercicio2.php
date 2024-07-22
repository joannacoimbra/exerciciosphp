<!-- Faça uma pesquisa dos comandos abaixo, na documentação do PHP, explicando cada um deles: 
session_unset();
mysql_query();
isset();
include();
md5(); -->
<!DOCTYPE html>
<html>

<head>
    <title>Exercicio 2</title>
</head>

<body>
    <?php
    //session_unset():
    // Este comando é utilizado para remover todas as variáveis de sessão. Isso significa que todas as variáveis de sessão atualmente registradas serão removidas, mas a sessão em si ainda será mantida.
    // Após chamar session_unset(), você pode querer chamar session_destroy() para finalizar completamente a sessão.
   
    // mysql_query():
    // eEste comando era usado nas versões antigas do PHP para enviar uma consulta SQL para um banco de dados MySQL.
    // No entanto, desde o PHP 5.5.0, a extensão MySQL foi removida em favor das extensões MySQLi (MySQL Improved) e PDO (PHP Data Objects). Portanto, é altamente recomendado utilizar essas extensões modernas para interagir com bancos de dados MySQL.
    
    // isset():
    // isset() é uma função em PHP que determina se uma variável está definida e não é nula.
    // Ela retorna true se a variável estiver definida e tiver um valor diferente de null, e false caso contrário.
    
    // include():
    // include() é uma função em PHP que inclui e avalia o conteúdo de um arquivo especificado durante a execução do script.
    // Ele é útil para incluir código de outros arquivos PHP no seu script atual. Isso é comumente usado para reutilização de código, modularidade e separação de preocupações.
    
    // md5():
    // md5() é uma função de hash em PHP que calcula o hash MD5 (Message Digest Algorithm 5) de uma string.
    // O hash MD5 é uma representação hexadecimal de 32 caracteres de uma string, frequentemente usada para fins de segurança e verificação de integridade de dados. No entanto, deve-se notar que MD5 é considerado inseguro para fins de criptografia devido a vulnerabilidades conhecidas. Recomenda-se o uso de funções de hash mais seguras, como SHA-256, para criptografia e hashing seguro de dados sensíveis.
    ?>
</body>

</html>