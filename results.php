<?php include 'header.php'; ?>

<div class="container">
	<div class="results-otsing">
	  <form autocomplete="off" action="results.php">
	    <input value="Direktorid" placeholder="Sisesta märksõna, viide, vms…" id="otsi" type="text" class="center-align autocomplete" autocomplete="off">
	  </form>
	</div>

	<div class="results-table">
		<table class="bordered">
			<thead>
				<tr>
					<th class="type">Tüüp</th>
					<th class="code">Kood</th>
					<th class="info">Info</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td class="type-field"><i class="fa fa-file-image-o" aria-hidden="true"></i></td>
					<td>21K-Fo-2.1-2</td>
					<td>Koolijuhataja (direktor) Enn Murdmaa (Ernst Martinson) portree.<ul class="meta-info"><li>Aasta: <span class="meta-info-value">1980</span></li></ul></td>
				</tr>
				<tr>
					<td class="type-field"><i class="fa fa-file-video-o" aria-hidden="true"></i></td>
					<td>21K-Fu-2.2-2</td>
					<td>Koolijuhataja (direktor) Enn Murdmaa (Ernst Martinson) video.<ul class="meta-info"><li>Aasta: <span class="meta-info-value">1980</span></li><li>Pikkus: <span class="meta-info-value">20min</span></li></ul></td>
				</tr>
				<tr>
					<td class="type-field"><i class="fa fa-file-o" aria-hidden="true"></i></td>
					<td>21K-Fa-2.3-2</td>
					<td>Koolijuhataja (direktor) Enn Murdmaa (Ernst Martinson) käskkiri.<ul class="meta-info"><li>Aasta: <span class="meta-info-value">1980</span></li></ul></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php include 'footer.php'; ?>