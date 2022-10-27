<!DOCTYPE html>
<html>
<head>
	<title>Tracer Alumni | Report User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
 
	<table class="table table-bordered">
		<thead>
			<tr>
                <th>No</th>
                <th>Email</th>
                <th>Nisn</th>
                <th>Nama</th>
                <th>Nama panggilan</th>
                <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>No telp</th>
                <th>Alamat</th>
                <th>Status User</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $u->email }}</td>
                <td>{{ $u->nisn }}</td>
                <td>{{ $u->nama }}</td>
                <td>{{ $u->nama_panggilan }}</td>
                <td>{{ $u->jurusan }}</td>
                <td>{{ $u->thn_lulus }}</td>
                <td>{{ $u->no_tlp }}</td>
                <td>{{ $u->alamat }}</td>
                <td>
                    @if($u->status == 0)
                    <h5><span class="badge bg-opacity-100 bg-danger text-white">Nonaktif</span></h5>
                    @else($u->status == 1)
                    <h5><span class="badge bg-opacity-100 bg-success text-white">Aktif</span></h5>
                    @endif
                    
                </td>
              </tr>
			@endforeach
		</tbody>
	</table>


</body>
</html>
