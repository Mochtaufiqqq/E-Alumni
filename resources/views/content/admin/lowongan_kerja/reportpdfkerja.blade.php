<!DOCTYPE html>
<html>
<head>
	<title>Tracer Alumni | Report Lowongan Kerja</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data User</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Judul</th>
                <th scope="col">Dekskripsi</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kategori</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($kerjas as $k)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><img src="{{ asset('storage/profile-images2/'.$k->foto) }}" alt=""></td>
                <td>{{ $k->judul }}</td>
                <td>{{ $k->dekskripsi }}</td>
                <td>{{ $k->tgl }}</td>
                <td>{{ $k->kategori }}</td>
                <td>
                    
                </td>
              </tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
