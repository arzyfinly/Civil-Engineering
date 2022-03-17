@extends('../layouts.pelaksanaan-layout')
@section('title', 'Home')
@include('sweetalert::alert')

@section('content')
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div style="text-align: center;">
							<h4>Pelaksanaan Praktikum</h4>
						</div>
                        <div class="card" style="width: 50rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th><strong>Judul Matkul</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nip</td>
                                                <td>:</td>
                                                <td>2100000212</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Dosen</td>
                                                <td>:</td>
                                                <td>Dosen Nama</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Jadwal</td>
                                                <td>:</td>
                                                <td>Senin(13.10 - 14.50)</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Presensi Dosen Terakhir</td>
                                                <td>:</td>
                                                <td>Senin, 10 maret 2022 - 13:21:48</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><input type="button" class="btn btn-primary" value="Presensi" disabled></td>
                                            </tr>
                                        </tbody>
                                    </table>                                   
                                </li>
                            </ul>
                          </div>
					</div>
				</div>
			</div>
		</div>
	</div>