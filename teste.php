<?php

$host = "mail.ifjrsolucoes.com.br";
$usuario = "contato@ifjrsolucoes.com.br";
$senha = "DSAd90k123ms";

//recebe a conexao
$mbox = imap_open("{".$host.":143/novalidate-cert}INBOX", $usuario, $senha)or die("can't connect: " . imap_last_error());

for($m = 1; $m <= imap_num_msg($mbox); $m++){
    //ele vai repetir esse laço enquanto houver mensagens
}


for($m = 1; $m <= imap_num_msg($mbox); $m++){
    //ele vai repetir esse laço enquanto houver mensagens
    $header = imap_headerinfo($mbox, $m);
    $body = imap_fetchbody ($mbox, $m,1.2);
    echo '<li>';
        echo '<h2>';
        echo $header->subject 
            . ', '
            . date('d-m-Y H:i:s', strtotime($header->date));
     echo '</h2>';
     echo '<hr>';
     echo '<p>' . $body . '</p>';
        echo '</li>';
}
?>