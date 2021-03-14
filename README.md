<h1>Rumus Chalange 4 Adisutjipto Linux Comunity</h1>

Tampilan Website
<img src="linuxc4/img/bgc4.png">

Rumus Volume Bola
<br>
<img src="linuxc4/img/volumC1.png" width="320px" height="250px">

Rumus Luas Bola
<br>
<img src="linuxc4/img/volumc2.png" width="320px" height="250px">

Hal terpenting dalam aplikasi ini ialah pada saat kita merubah rumus tersebut menjadi sebuah code PHP
berikut source code PHP untuk menghitung Volume bola dan Luas Permukaan Bola

<br>
Volume Bola
<br>
<blockquote>
  //Volume Bola
  
   if ($phi == '3.14') {
        $ops1 = 4 * 3.14 * pow($r, 3);
        $volume = $ops1 / 3;
        $notif = 'on';
    } else {
        $ops1 = 22 * pow($r, 3) / 7;
        $volume = 4 * $ops1 / 3;
        $notif = 'on';
    }
  </blockquote>
  
<br>
Luas Permukaan Bola
<br>
<blockquote>
  //Rumus Luas Permukaan Bola
  
 if ($phi == '3.14') {
        $luas = 4 * 3.14 * pow($r, 2);
        $notif = 'on';
    } else {
        $ops1 = 22 * pow($r, 2) / 7;
        $luas = 4 * $ops1;
        $notif = 'on';
    }
  </blockquote>



<p> Cara Dwonload Source Code</p>

<ul>
  <li>
    1. Install menggunakan Git
    
    <blockquote> $ git clone git://github.com/Nofrisdan/Chalange4_linuxRUMUS </blockquote>
   </li>
   <li>
      2. Install menggunakan link github
  <blockquote> https://github.com/Nofrisdan/Chalange4_linuxRUMUS </blockquote>
  </li>
</ul>


<p> Coba aplikasinya dengan mengunjungi link berikut </p>
 <blockquote> https://nofrisdanstta.000webhostapp.com/ </blockquote>
