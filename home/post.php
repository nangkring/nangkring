<?php
include('fragment/header.php');
?>
    <div id="postingan">
        <h1>Buat Post</h1><br>
        <input type="txt" name="judul" placeholder="judul" /><br>
        Jenis Postingan : <select name="category">
            <option>Thread</option>
            <option>Event</option>
        </select>
        <br>Comunity : <select name="comunity">
            <option>Hotweels</option>
            <option>Sera Mania</option>
        </select>
        <br>Nangkringan : <select name="nangkringan">
            <option>Alun-alun Kendal</option>
            <option>Simpang Lima</option>
        </select>
        <textarea name="post" placeholder="isikan thread anda di sini"></textarea><br>
        <input type="submit" value="kirim">
    </div>
<?php
include('fragment/SideFoot.php');
?>