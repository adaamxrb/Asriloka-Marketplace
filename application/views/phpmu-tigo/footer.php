<?php
echo "<div class='wrapper'>
	<ul class='right'>";
$topmenu2 = $this->model_utama->view_where('menu', array('position' => 'Top', 'aktif' => 'Ya'), 'urutan', 'ASC', 0, 5);
foreach ($topmenu2->result_array() as $row) {
	echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
}
echo "</ul>
	<p class='footer'>&copy; 2023 Asriloka Marketplace. All Rights reserved.<br/> <b style='color:green'> <a href=https://www.upnjatim.ac.id/ > UPN Veteran Jawa Timur </a> | <a href=https://www.github.com/adaamxrb > Adham Roy Bhafiel </a></b></p>
</div>";
