<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <title>Array Siswa</title>

        <style>
            h2{
                text-align: center;
                color: navy;
            }
            th{
                text-align: center;
            }
            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <br/><br/><br/>
        <h2>DAFTAR NILAI MAHASISWA/I</h2>

        <?php
            $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
            $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
            $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
            $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

            $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
        ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr/>
                    <br/><br/>
                    <table class="table">
                        <thead>
                            <tr class="btn-primary">
                                <th>
                                    No
                                </th>
                                <th>
                                    NIM
                                </th>
                                <th>
                                    UTS
                                </th>
                                <th>
                                    UAS
                                </th>
                                <th>
                                    Tugas 
                                </th>
                                <th>
                                    Nilai Akhir
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomor = 1;
                                foreach($ar_nilai as $ns){
                                  echo '<tr><td class="active">'.$nomor.'</td>';
                                  echo '<td>'.$ns['nim'].'</td>';
                                  echo '<td class="active">'.$ns['uts'].'</td>';
                                  echo '<td>'.$ns['uas'].'</td>';
                                  echo '<td class="active">'.$ns['tugas'].'</td>';
                                  $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                                  echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                                  echo '<tr/>';
                                  $nomor++;
                                 }
                                ?>
                        </tbody>
                    </table>
                    <br/><hr/>
    </body>
<html>