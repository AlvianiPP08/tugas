@extends("layouts.app")

@section('content')

    <form action = "/create" method = "post">
	    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	    <table>
	        <tr>
	            <td>NIM</td>
	            <td><input type='char' name='nim' /></td>
	        <tr>
	            <td>Nama Mahasiswa</td>
	            <td><input type="text" name='nama'/></td>
	        </tr>
	        <tr>
                <td>Matakuliah Rekayasa Perangkat Lunak</td>
	            <td><input type="text" name='mk_rpl'/></td>
	        </tr>
	        <tr>
	            <td>Matakuliah Komputasi Web Cerdas</td>
	            <td><input type="text" name='mk_kwc'/></td>
	        </tr>
            <tr>
	            <td>Matakuliah Jaringan Komputer</td>
	            <td><input type="text" name='mk_jarkom'/></td>
	        </tr>
            <tr>
                <td>Profesi Kerja dan Karir</td>
                <td>
                <select name="profesi_karir">
                <option value="null">Pemilihan Profesi Kerja dan Karir</option>
                    <option value="P001">Computer Network/Data Engineer</option>
                    <option value="P002">Database Engineer / Database Administrator</option>
                    <option value="P003">Designer Grafis</option>
                    <option value="P004">Developer IT</option>
                    <option value="P005">Software Engineer</option>
                    <option value="P006">System Analyst dan System Inte</option>
                </select></td>
	        </tr>
            <tr>
                <td>Minat dan Bakat Mahasiswa</td>
                <td>
                <select name="minat_bakat">
                    <option value="null">Pemilihan Minat dan Bakat</option>
                    <option value="M001">Administrasi Sistem Jaringan</option>
                    <option value="M002">Analisis Database Server</option>
                    <option value="M003">Merakit, Merancang dan Memperbaiki Komputer</option>
                    <option value="M004">Mobile Developer</option>
                    <option value="M005">Problem Soloving</option>
                    <option value="M006">Software Engineer</option>
                </select></td>
	        </tr>
           
	</table>
    <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
@endsection
