<!DOCTYPE html>
<html>
<head>
	<title>Tracer Alumni | Report User</title>
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
                <th scope="col">Nisn</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Tahun Lulus</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Status User</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $u->nisn }}</td>
                <td>{{ $u->nama }}</td>
                <td>{{ $u->jurusan }}</td>
                <td>{{ $u->thn_lulus }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->alamat }}</td>
                <td>
                    @if($u->status_user_id === 1)
                    <h5><span class="badge bg-opacity-100 bg-danger text-white">Nonaktif</span></h5>
                    @else($u->status_user_id === 2)
                    <h5><span class="badge bg-opacity-100 bg-success text-white">Aktif</span></h5>
                    @endif
                    
                </td>
              </tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
