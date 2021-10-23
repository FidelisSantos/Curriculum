<?php
$title = "PHP - Curriculum Vitor Fidelis";
$page = "skill";
include("part/head.php");
include("link/menu.php")
?>
<code>
  create database curriculum;<br>
  character set utf8mb4<br>
  collate utf8mb4_0900_ai_ci;<br>
  use database curriculum<br>
  create table nome(<br>
  id_nome int not null auto_increment,<br>
  nome varchar (40) not null,<br>
  primary key (id_nome),)<br>
  insert into nome values<br>
  ('Vitor Hugo Fidelis');<br>
  drop table nome;<br>
  drop database curriculum;<br>



</code>
<?php
include("link/social.php");
include("part/footer.php")
?>