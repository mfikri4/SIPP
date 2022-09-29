<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
    <title>File Kematian | SIPP </title>
</head>
<body>
        <div style="text-align: center;">
            <img src="{{ public_path('assets/image/2.png') }}" style="width: 700px; height: 200px">
        </div>

            @foreach ($data as $cat)
        <div style="text-align: center;">
            <h6><u>SURAT KETERANGAN KEMATIAN</u></h6>
            <p>NO : 474.3 / ... / {{ date("d", strtotime($cat->updated_at)); }}.{{ date("m", strtotime($cat->updated_at)); }}... / {{ date("Y", strtotime($cat->updated_at)); }}
            <p>
        </div>

        <main>
            <p>     Yang bertanda tangan dibawah ini menerangkan bahwa:<p>
            <table class=" table-borderless">
            
                <tr>
                    <td>Nama Kepala Keluarga    </td>
                    <td>: {{$cat->nama_kk}}</td>
                </tr>
                <tr>
                    <td>Nomor Kepala Keluarga    </td>
                    <td>: {{$cat->no_kk}}</td>
                </tr>
                <br>

                <tr>
                    <td>Jenazah    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>NIK                         </td>
                    <td>: {{$cat->nik_jenazah}}</td>
                </tr>
                <tr>
                    <td>Nama                        </td>
                    <td>: {{$cat->nama_jenazah}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin               </td>
                    <td>: {{$cat->jenis_kelamin_jenazah}}</td>
                </tr>
                <tr>
                    <td>Tempat dan Tanggal Lahir      </td>
                    <td>: {{$cat->tempat_lahir_jenazah}}, {{ date("d  M Y", strtotime($cat->tanggal_lahir_jenazah)); }}</td>
                </tr>
                <tr>
                    <td>Umur                        </td>
                    <td>: {{$cat->umur_jenazah}}</td>
                </tr>
                <tr>
                    <td>Agama                       </td>
                    <td>: {{$cat->agama_jenazah}}</td>
                </tr>
                <tr>
                    <td>Alamat                      </td>
                    <td>: {{$cat->alamat_jenazah}}</td>
                </tr>
                <tr>
                    <td>Desa                        </td>
                    <td>: {{$cat->desa_jenazah}}</td>
                </tr>
                <tr>
                    <td>Kecamatan                   </td>
                    <td>: {{$cat->kecamatan_jenazah}}</td>
                </tr>
                <tr>
                    <td>Kabupaten                   </td>
                    <td>: {{$cat->kabupaten_jenazah}}</td>
                </tr>
                <tr>
                    <td>Provinsi                    </td>
                    <td>: {{$cat->provinsi_jenazah}}</td>
                </tr>
                <tr>
                    <td>Tanggal Kematian            </td>
                    <td>: {{ date("d  M Y", strtotime($cat->tanggal_kematian)); }}</td>
                </tr>
                <tr>
                    <td>Pukul                       </td>
                    <td>: {{ date("H:i", strtotime($cat->jam_kematian)); }}</td>
                </tr>
                <tr>
                    <td>Sebab Kematian              </td>
                    <td>: {{$cat->sebab_kematian}}</td>
                </tr>
                <tr>
                    <td>Tempat Kematian             </td>
                    <td>: {{$cat->tempat_kematian}}</td>
                </tr>
                <tr>
                    <td>Yang Menerangkan Kematian   </td>
                    <td>: {{$cat->menerangkan_kematian}}</td>
                </tr>
                <br>

                <tr>
                    <td>Bapak/Ayah  </td>
                    <td></td>
                </tr>
                <tr>
                    <td>NIK                         </td>
                    <td>: {{$cat->nik_ayah}}</td>
                </tr>
                <tr>
                    <td>Nama                        </td>
                    <td>: {{$cat->nama_ayah}}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir      </td>
                    <td>: {{$cat->tempat_lahir_ayah}}, {{ date("d  M Y", strtotime($cat->tanggal_lahir_ayah)); }}</td>
                </tr>
                <tr>
                    <td>Umur                        </td>
                    <td>: {{$cat->umur_ayah}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan                </td>
                    <td>: {{$cat->pekerjaan_ayah}}</td>
                </tr>
                <tr>
                    <td>Alamat                      </td>
                    <td>: {{$cat->alamat_ayah}}</td>
                </tr>
                <tr>
                    <td>Desa                        </td>
                    <td>: {{$cat->desa_ayah}}</td>
                </tr>
                <tr>
                    <td>Kecamatan                   </td>
                    <td>: {{$cat->kecamatan_ayah}}</td>
                </tr>
                <tr>
                    <td>Kabupaten                   </td>
                    <td>: {{$cat->kabupaten_ayah}}</td>
                </tr>
                <tr>
                    <td>Provinsi                    </td>
                    <td>: {{$cat->provinsi_ayah}}</td>
                </tr>
                <br>


                <tr>
                    <td>Ibu  </td>
                    <td></td>
                </tr>
                                <tr>
                    <td>NIK                         </td>
                    <td>: {{$cat->nik_ibu}}</td>
                </tr>
                <tr>
                    <td>Nama                        </td>
                    <td>: {{$cat->nama_ibu}}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir      </td>
                    <td>: {{$cat->tempat_lahir_ibu}}, {{ date("d  M Y", strtotime($cat->tanggal_lahir_ibu)); }}</td>
                </tr>
                <tr>
                    <td>Umur                        </td>
                    <td>: {{$cat->umur_ibu}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan                </td>
                    <td>: {{$cat->pekerjaan_ibu}}</td>
                </tr>
                <tr>
                    <td>Alamat                      </td>
                    <td>: {{$cat->alamat_ibu}}</td>
                </tr>
                <tr>
                    <td>Desa                        </td>
                    <td>: {{$cat->desa_ibu}}</td>
                </tr>
                <tr>
                    <td>Kecamatan                   </td>
                    <td>: {{$cat->kecamatan_ibu}}</td>
                </tr>
                <tr>
                    <td>Kabupaten                   </td>
                    <td>: {{$cat->kabupaten_ibu}}</td>
                </tr>
                <tr>
                    <td>Provinsi                    </td>
                    <td>: {{$cat->provinsi_ibu}}</td>
                </tr>
                <br>
                <tr>
                    <td>Saksi 1  </td>
                    <td></td>
                </tr>
                                <tr>
                    <td>NIK                         </td>
                    <td>: {{$cat->nik_saksi1}}</td>
                </tr>
                <tr>
                    <td>Nama                        </td>
                    <td>: {{$cat->nama_saksi1}}</td>
                </tr>
                <tr>
                    <td>Tempat dan Tanggal Lahir      </td>
                    <td>: {{$cat->tempat_lahir_saksi1}}, {{ date("d  M Y", strtotime($cat->tanggal_lahir_saksi1)); }}</td>
                </tr>
                <tr>
                    <td>Umur                        </td>
                    <td>: {{$cat->umur_saksi1}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan                </td>
                    <td>: {{$cat->pekerjaan_saksi1}}</td>
                </tr>
                <tr>
                    <td>Alamat                      </td>
                    <td>: {{$cat->alamat_saksi1}}</td>
                </tr>
                <tr>
                    <td>Desa                        </td>
                    <td>: {{$cat->desa_saksi1}}</td>
                </tr>
                <tr>
                    <td>Kecamatan                   </td>
                    <td>: {{$cat->kecamatan_saksi1}}</td>
                </tr>
                <tr>
                    <td>Kabupaten                   </td>
                    <td>: {{$cat->kabupaten_saksi1}}</td>
                </tr>
                <tr>
                    <td>Provinsi                    </td>
                    <td>: {{$cat->provinsi_saksi1}}</td>
                </tr>
                <br>
                <tr>
                    <td>Saksi 2  </td>
                    <td></td>
                </tr>
                <tr>
                    <td>NIK                         </td>
                    <td>: {{$cat->nik_saksi2}}</td>
                </tr>
                <tr>
                    <td>Nama                        </td>
                    <td>: {{$cat->nama_saksi2}}</td>
                </tr>
                <tr>
                    <td>Tempat dan Tanggal Lahir      </td>
                    <td>: {{$cat->tempat_lahir_saksi2}}, {{ date("d  M Y", strtotime($cat->tanggal_lahir_saksi2)); }}</td>
                </tr>
                <tr>
                    <td>Umur                        </td>
                    <td>: {{$cat->umur_saksi2}}</td>
                </tr>
                <tr>
                    <td>Pekerjaan                </td>
                    <td>: {{$cat->pekerjaan_saksi2}}</td>
                </tr>
                <tr>
                    <td>Alamat                      </td>
                    <td>: {{$cat->alamat_saksi2}}</td>
                </tr>
                <tr>
                    <td>Desa                        </td>
                    <td>: {{$cat->desa_saksi2}}</td>
                </tr>
                <tr>
                    <td>Kecamatan                   </td>
                    <td>: {{$cat->kecamatan_saksi2}}</td>
                </tr>
                <tr>
                    <td>Kabupaten                   </td>
                    <td>: {{$cat->kabupaten_saksi2}}</td>
                </tr>
                <tr>
                    <td>Provinsi                    </td>
                    <td>: {{$cat->provinsi_saksi2}}</td>
                </tr>
            </table>

        </main>

        <br>
        <br>
        <br>
        <br>
        <br>

        <div style="width:300px;float:left; margin-left:50px;">
            
            <br/>Pemohon
            <br>
            <br>
            <br>
            <br>
            <p>{{$cat->nama_kk}}<br/></p>
        </div>

        <div style="width:200px;float:right">
            Kudus, {{ date("d  M Y", strtotime($cat->updated_at)); }}
            <br/>KEPALA DESA
            <br>
            <br>
            <br>
            <br>
            <p>SULISTIYO, S.STP<br/>
            NIP. 189283423473459</p>
        </div>

        @endforeach
</body>
<style>

</style>
</html>