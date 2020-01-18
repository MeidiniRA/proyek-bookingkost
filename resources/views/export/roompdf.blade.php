
<table class="table" cellpadding="1" cellspacing="1" border="1">
	<thead>
		<tr><th>No</th>
			<th>Nama Kamar</th>
			<th>Kategori</th>
			<th>Fasilitas</th>
			<th>Kapasitas</th>
			<th>Harga</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		@foreach($room as $r)
		<tr>
			<td>{{$r->id}}</td>
			<td>{{$r->nama}}</td>
			<td>{{$r->kategori}}</td>
			<td>{{$r->fasilitas}}</td>
			<td>{{$r->kapasitas}}</td>
			<td>{{$r->harga}}</td>
			<td>{{$r->status}}</td>
		</tr>
			@endforeach
		</tbody>
	</table>