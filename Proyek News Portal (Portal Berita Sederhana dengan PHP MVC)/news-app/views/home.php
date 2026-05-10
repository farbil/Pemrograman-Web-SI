<h2>Portal Berita</h2> 
 
<a href="?action=setLang&lang=id">Indonesia</a> | 
<a href="?action=setLang&lang=en">English</a> | 
<a href="?action=login">Login</a> 
 
<hr> 
 
<?php foreach($berita as $b): ?> 
    <h3><?= $lang=='id' ? $b['judul_id'] : $b['judul_en'] ?></h3> 
    <img src="public/uploads/<?= $b['thumbnail'] ?>" width="100"> 
    <p><?= date('d M Y H:i', strtotime($b['datetime'])) ?></p> 
    <p><?= substr($lang=='id' ? $b['isi_id'] : $b['isi_en'],0,100) ?>...</p> 
    <hr> 
<?php endforeach; ?>