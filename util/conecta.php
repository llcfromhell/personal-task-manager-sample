<?php
/**
 * Created by PhpStorm.
 * User: IgoR
 * Date: 05/10/2017
 * Time: 14:17
 */
$conexao = mysqli_connect("ko86t9azcob3a2f9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "zph9un2swyi9h0bk", "pc2uyih74byti1le", "ev66y9c3ie76deqe");


if (!$conexao->set_charset("utf8")) {
    exit();
}