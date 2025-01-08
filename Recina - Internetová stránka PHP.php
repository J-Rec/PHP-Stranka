<?php
?>


<html>
<head>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Pánské Obleky</h1>
</body>
</html>
<p style="font-size: 14px;"><p style="position: absolute; top: 0; left: 0;">JRec html test</p></p>



<div>
  <img src="https://img01.ztat.net/article/spp-media-p1/d29b51eef68a38d88688daa472be37aa/bff0f71dc47e4a7c931c4f5a64de5dd6.jpg?imwidth=1800&filter=packshot" style="margin-left: 300px; width: 300px; height: 400px;" alt="https://img01.ztat.net/article/spp-media-p1/d29b51eef68a38d88688daa472be37aa/bff0f71dc47e4a7c931c4f5a64de5dd6.jpg?imwidth=1800&filter=packshot" style="margin-left: 300px; width: 300px; height: 400px;">
  <a href="">
    <button style="padding-top: 5px; padding-bottom: 5px;">KOUPIT A ZAPLATIT</button>
  </a>
</div>

<ul>
<li><a href="">Domovská stránka</a></li>
<li>
<a href="">Účelové obleky</a>
<ul class="dropdown">
<li><a href="">Obchodní obleky</a></li> <li>
<a href="">Svatbové obleky</a></li>
<li><a href="">Neformální obleky</a></li> <li>
<a href="">Večerní obleky</a></li>
</ul> </li>
<li><a href="">O Nás</a></li> <li>
<ul class="dropdown">
<a href="">Kontakty</a></li> </ul>
</body> </html>

<style>
body {
    margin: 0;
    padding: 0;
    border: 1px solid black;
}

ul {
    list-style: none;
    background: #22438C;
    padding: 0;
    margin: 0;
}

ul li {
    display: inline-block;
    position: relative;
}

ul li a {
    display: block;
    padding: 20px 25px;
    color: #FFF;
    text-decoration: none;
    text-align: center;
    font-size: 20px;
}

ul li ul.dropdown li { display: block;
}
ul li ul.dropdown { width: 100%;
background: #22438C; position: absolute;
z-index: 999;
display: none;
}

ul li a:hover { background: #112C66;
}
ul li:hover ul.dropdown { display: block;
}