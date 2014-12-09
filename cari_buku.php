<?php
include("header.php");
?>

<div class="konten">
	<div id="sliderFrame">
    <div id="slider">
        <img src="gambar/buku1.jpg" />
        <img src="gambar/buku2.jpg" />
		<img src="gambar/buku3.jpg" />
		
    </div>
	</div>
	<tr>
			<td><?php echo $i; ?></td>
			<td>
				<a href="buku.php?id_buku=<?php echo $buku[0];?>"><?php echo $buku[1] ?> </a>
			</td>
			<td><?php echo $buku[2]; ?></td>
			<td><?php echo $buku[3]; ?></td>
			<td><?php echo $buku[4]; ?></td>
			<td><?php echo $buku[5]; ?></td>
			<td>
				<form method="POST" action="pinjam.php?id_buku=<?php echo $buku[0];?>">
					<input type="submit" name="tambah" value=" PINJAM " >
				</form>
		</tr>
