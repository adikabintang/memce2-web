<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Depok</h3>
	</div>
	
	<div class="panel-body">
		<h2>Highlight</h2>
		<ul class="list-inline">
  			<li><a href="#suhuChart" class="btn btn-success">Suhu</a></li>
  			<li><a href="#humidityChart" class="btn btn-success">Kelembapan</a></li>
  			<li><a href="#speedChart" class="btn btn-success">Kecepatan Angin</a></li>
  			<li><a href="#hujanChart" class="btn btn-success">Curah Hujan</a></li>
  			<li><a href="#cahayaChart" class="btn btn-success">Intensitas Cahaya</a></li>
  			<li><a href="#tekananChart" class="btn btn-success">Tekanan Udara</a></li>
  			<li><a href="#tabledepok" class="btn btn-info">Table</a></li>
		</ul>
		<br>
		<div class="row">
			<div class="col-sm-8">
				<table class="table">
					<tr>
						<td style="width:20%">Lokasi</td>
						<td>: Depok</td>
					</tr>
						<td>Status alat</td>
						<td>: <span class="label label-info">Aktif</span></td>
					</tr>
				</table>
				
				<br>
				<div class="panel panel-info">
					<div id="suhuChart" style="min-width: 300px; height: 300px; margin: 2"></div>
				</div>
				<br>
				<div class="panel panel-info">
					<div id="humidityChart" style="min-width: 300px; height: 300px; margin: 2"></div>
				</div>
				<br>
				<div class="panel panel-info">
					<div id="speedChart" style="min-width: 300px; height: 300px; margin: 2"></div>
				</div>
				<br>
				<div class="panel panel-info">
					<div id="hujanChart" style="min-width: 300px; height: 300px; margin: 2"></div>
				</div>
				<br>
				<div class="panel panel-info">
					<div id="cahayaChart" style="min-width: 300px; height: 300px; margin: 2"></div>
				</div>
				<br>
				<div class="panel panel-info">
					<div id="tekananChart" style="min-width: 300px; height: 300px; margin: 2"></div>
				</div>
			</div>
			<div class="col-sm-4">
				<h4>Peta Lokasi</h4>
				<br>
				<div id="depokMap" style="width:300px;height:300px;"></div>
				<br>
				<br>
				<h3><b>Hasil Analisa Otomatis</b></h3><br>
				<h4>Pengelompokkan Cuaca: </h4>
				<h4><i>Berawan</i></h4>
			</div>
		</div>
		<div class="row">
				<div class="col-sm-10 col-md-offset-1">
				<h3 class="text-center">Tabel Hasil Pembacaan</h3>
				<table class="table table-hover table-bordered" id="tabledepok">
					<thead>
						<th>Suhu (&#186;C)</th>
						<th>Kelembaban (%)</th>
						<th>Kecepatan Angin (km/jam)</th>
						<th>Curah Hujan (%)</th>
						<th>Intensitas Cahaya</th>
						<th>Tekanan Udara (Pa)</th>
						<th>Waktu Pembacaan</th>
					</thead>
					<tbody>
						<?php
							foreach ($data as $row) {
								echo "<tr>";
								echo "<td>".$row['suhu']."</td>";	
								echo "<td>".$row['kelembaban']."</td>";	
								echo "<td>".$row['kecepatan_angin']."</td>";	
								echo "<td>".$row['curah_hujan']."</td>";	
								echo "<td>".$row['intensitas_cahaya']."</td>";	
								echo "<td>".$row['tekanan_udara']."</td>";
								echo "<td>".$row['waktu']."</td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
				</div>
		</div>
	</div>
</div>