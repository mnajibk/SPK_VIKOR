<?= $this->extend('Layout/template.php'); ?>

<?= $this->section('perhitungan'); ?>
<?= $link; ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<?php 
// function normalisasi($C,$MaxC,$MinC){
    // if (!empty($C && $MaxC && $MinC)) {

    //     $hasil = ($MaxC - $C) / ($MaxC - $MinC);

    // return $hasil;
    // }

    // try{
    //     $hasil = ($MaxC - $C) / ($MaxC - $MinC);
    // } catch (DivisionByZeroError $e){
    //     return '0';
    // } catch (ErrorException $e){
    //     return $e;
    // }
    
// }
?>

<?php foreach ($max as $g) : ?>
<?php endforeach; ?>
<?php foreach ($min as $h) : ?>
<?php endforeach; ?>
<?php foreach ($wC1 as $c1) : ?>
<?php endforeach; ?>
<?php foreach ($wC2 as $c2) : ?>
<?php endforeach; ?>
<?php foreach ($wC3 as $c3) : ?>
<?php endforeach; ?>
<?php foreach ($wC4 as $c4) : ?>
<?php endforeach; ?>
<?php foreach ($alternatifx as $ax) : ?>
<?php endforeach; ?>
<div class="container mt-5">

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Matriks Keputusan</h3>
        </div>
        <div class="card-body">
            <div class="mt-3">

                <table id="" class="table table-bordered border-dark" style="width:100%">
                    <thead>
                        <tr>

                            <th>Kode</th>
                            <th>Nama</th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alternatif as $A) : ?>
                        <tr>
                            <td><?= $A->kode_alternatif; ?></td>
                            <td><?= $A->nama_alternatif; ?></td>
                            <td><?= $A->nilai_raport; ?></td>
                            <td><?= $A->nilai_ekstrakulikuler; ?></td>
                            <td><?= $A->nilai_prestasi; ?></td>
                            <td><?= $A->nilai_sikap; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-header bg-primary text-white">
            <h3>Menentukan Bobot (W)</h3>
        </div>
        <div class="card-body">

            <div class="mt-3">

                <table id="" class="table table-bordered border-dark" style="width:100%">
                    <thead>
                        <tr>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($kriteria as $w) : ?>
                            <td><?= $w->bobot; ?></td>
                            <?php endforeach; ?>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-header bg-primary text-white">
            <h3>Matriks Normalisasi</h3>
        </div>
        <div class="card-body">

            <div class="mt-3">

                <table id="" class="table table-bordered border-dark" style="width:100%">
                    <thead>
                   
                        <tr>
                            <th>Kode</th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($alternatif as $A) : ?>

                        <?php 
                            //Normalisasi Matriks Keputusan
                          
                            $C1    = $A->nilai_raport;
                            $MaxC1 = $g->nilai_raport;
                            $MinC1 = $h->nilai_raport;
                            $normalisasiC1 = ($MaxC1 - $C1) / ($MaxC1 - $MinC1);
                           
                            $C2    = $A->nilai_ekstrakulikuler;
                            $MaxC2 = $g->nilai_ekstrakulikuler;
                            $MinC2 = $h->nilai_ekstrakulikuler;
                            $normalisasiC2 = ($MaxC2 - $C2) / ($MaxC2 - $MinC2);
                           
                            $C3    = $A->nilai_prestasi;
                            $MaxC3 = $g->nilai_prestasi;
                            $MinC3 = $h->nilai_prestasi;
                            $normalisasiC3 = ($MaxC3 - $C3) / ($MaxC3 - $MinC3);
                           
                            $C4    = $A->nilai_sikap;
                            $MaxC4 = $g->nilai_sikap;
                            $MinC4 = $h->nilai_sikap;
                            $normalisasiC4 = ($MaxC4 - $C4) / ($MaxC4 - $MinC4);
                        ?>
                       
                        <tr>
                            <td><?= $A->kode_alternatif; ?></td>
                            <td><?= $normalisasiC1; ?></td>
                            <td><?= $normalisasiC2; ?></td>
                            <td><?= $normalisasiC3; ?></td>
                            <td><?= $normalisasiC4; ?></td>
                        </tr>


                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-header bg-primary text-white">
            <h3>Normalisasi Bobot</h3>
        </div>
        <div class="card-body">

            <div class="mt-3">

                <table id="" class="table table-bordered border-dark" style="width:100%">
                    <thead>
                        <tr>

                            <th>Kode</th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($max as $g) : ?>
                        <?php endforeach; ?>
                        <?php foreach ($min as $h) : ?>
                        <?php endforeach; ?>
                        <?php foreach ($wC1 as $c1) : ?>
                        <?php endforeach; ?>
                        <?php foreach ($wC2 as $c2) : ?>
                        <?php endforeach; ?>
                        <?php foreach ($wC3 as $c3) : ?>
                        <?php endforeach; ?>
                        <?php foreach ($wC4 as $c4) : ?>
                        <?php endforeach; ?>
                        <?php foreach ($alternatifx as $ax) : ?>
                        <?php endforeach; ?>
                        <?php foreach ($alternatif as $A) : ?>


                        <?php 
                            //Normalisasi Matriks Keputusan
                          
                            $C1    = $A->nilai_raport;
                            $MaxC1 = $g->nilai_raport;
                            $MinC1 = $h->nilai_raport;
                            $normalisasiC1 = ($MaxC1 - $C1) / ($MaxC1 - $MinC1);
                           
                            $C2    = $A->nilai_ekstrakulikuler;
                            $MaxC2 = $g->nilai_ekstrakulikuler;
                            $MinC2 = $h->nilai_ekstrakulikuler;
                            $normalisasiC2 = ($MaxC2 - $C2) / ($MaxC2 - $MinC2);
                           
                            $C3    = $A->nilai_prestasi;
                            $MaxC3 = $g->nilai_prestasi;
                            $MinC3 = $h->nilai_prestasi;
                            $normalisasiC3 = ($MaxC3 - $C3) / ($MaxC3 - $MinC3);

                            $C4    = $A->nilai_sikap;
                            $MaxC4 = $g->nilai_sikap;
                            $MinC4 = $h->nilai_sikap;
                            $normalisasiC4 = ($MaxC4 - $C4) / ($MaxC4 - $MinC4);

                            $wC1 = $c1->bobot;
                            $wC2 = $c2->bobot;
                            $wC3 = $c3->bobot;
                            $wC4 = $c4->bobot;

                            $normalisasiBobot1 = $wC1*$normalisasiC1;
                            $normalisasiBobot2 = $wC2*$normalisasiC2;
                            $normalisasiBobot3 = $wC3*$normalisasiC3;
                            $normalisasiBobot4 = $wC4*$normalisasiC4;
                            
                        ?>
                       
                        <tr>
                            <td><?= $A->kode_alternatif; ?></td>
                            <td><?= $normalisasiBobot1; ?></td>
                            <td><?= $normalisasiBobot2; ?></td>
                            <td><?= $normalisasiBobot3; ?></td>
                            <td><?= $normalisasiBobot4; ?></td>
                        </tr>


                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-header bg-primary text-white">
            <h3>Menghitung Nilai S</h3>
        </div>
        <div class="card-body">

            <div class="mt-3">

                <table id="" class="table table-bordered border-dark" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Nilai S</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alternatif as $A) : ?>

                        <?php 
                           
                            //Normalisasi Matriks Keputusan
                            $C1    = $A->nilai_raport;
                            $MaxC1 = $g->nilai_raport;
                            $MinC1 = $h->nilai_raport;
                            $normalisasiC1 = ($MaxC1 - $C1) / ($MaxC1 - $MinC1);
                           
                            $C2    = $A->nilai_ekstrakulikuler;
                            $MaxC2 = $g->nilai_ekstrakulikuler;
                            $MinC2 = $h->nilai_ekstrakulikuler;
                            $normalisasiC2 = ($MaxC2 - $C2) / ($MaxC2 - $MinC2);
                           
                            $C3    = $A->nilai_prestasi;
                            $MaxC3 = $g->nilai_prestasi;
                            $MinC3 = $h->nilai_prestasi;
                            $normalisasiC3 = ($MaxC3 - $C3) / ($MaxC3 - $MinC3);

                            $C4    = $A->nilai_sikap;
                            $MaxC4 = $g->nilai_sikap;
                            $MinC4 = $h->nilai_sikap;
                            $normalisasiC4 = ($MaxC4 - $C4) / ($MaxC4 - $MinC4);
                            
                            $wC1 = $c1->bobot;
                            $wC2 = $c2->bobot;
                            $wC3 = $c3->bobot;
                            $wC4 = $c4->bobot;

                            $normalisasiBobot1 = $wC1*$normalisasiC1;
                            $normalisasiBobot2 = $wC2*$normalisasiC2;
                            $normalisasiBobot3 = $wC3*$normalisasiC3;
                            $normalisasiBobot4 = $wC4*$normalisasiC4;

                            //Nilai S
                            $S = $normalisasiBobot1+$normalisasiBobot2+$normalisasiBobot3+$normalisasiBobot4;

                            ?>

                        <tr>
                            <td><?= $A->kode_alternatif; ?></td>
                            <td><?= $A->nama_alternatif; ?></td>
                            <td><?= $S; ?></td>
                           
                        </tr>
                        <?php endforeach; ?>
                
                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <div class="card mt-5">
        <div class="card-header bg-primary text-white">
            <h3>Menghitung Nilai R</h3>
        </div>
        <div class="card-body">

            <div class="mt-3">

                <table id="" class="table table-bordered border-dark" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Nilai R</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alternatif as $A) : ?>

                        <?php 
                           
                            $C1    = $A->nilai_raport;
                            $MaxC1 = $g->nilai_raport;
                            $MinC1 = $h->nilai_raport;
                            $normalisasiC1 = ($MaxC1 - $C1) / ($MaxC1 - $MinC1);
                           
                            $C2    = $A->nilai_ekstrakulikuler;
                            $MaxC2 = $g->nilai_ekstrakulikuler;
                            $MinC2 = $h->nilai_ekstrakulikuler;
                            $normalisasiC2 = ($MaxC2 - $C2) / ($MaxC2 - $MinC2);
                           
                            $C3    = $A->nilai_prestasi;
                            $MaxC3 = $g->nilai_prestasi;
                            $MinC3 = $h->nilai_prestasi;
                            $normalisasiC3 = ($MaxC3 - $C3) / ($MaxC3 - $MinC3);
                            
                            $C4    = $A->nilai_sikap;
                            $MaxC4 = $g->nilai_sikap;
                            $MinC4 = $h->nilai_sikap;
                            $normalisasiC4 = ($MaxC4 - $C4) / ($MaxC4 - $MinC4);
                            
                            $wC1 = $c1->bobot;
                            $wC2 = $c2->bobot;
                            $wC3 = $c3->bobot;
                            $wC4 = $c4->bobot;

                            $normalisasiBobot1 = $wC1*$normalisasiC1;
                            $normalisasiBobot2 = $wC2*$normalisasiC2;
                            $normalisasiBobot3 = $wC3*$normalisasiC3;
                            $normalisasiBobot4 = $wC4*$normalisasiC4;

                             //Nilai S
                             $S = $normalisasiBobot1+$normalisasiBobot2+$normalisasiBobot3+$normalisasiBobot4;
                            
                            //Nilai R
                            $R = max($normalisasiBobot1,$normalisasiBobot2,$normalisasiBobot3,$normalisasiBobot4);

                            ?>

                        <tr>
                            <td><?= $A->kode_alternatif; ?></td>
                            <td><?= $A->nama_alternatif; ?></td>
                            <td><?= $R; ?></td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <div class="card my-5">
        <div class="card-header bg-primary text-white">
            <h3>Menghitung Nilai Index (Qi)</h3>
        </div>
        <div class="card-body">

            <div class="mt-3">

                <table id="" class="table table-bordered border-dark" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Nilai Qi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $tmp_s= [];
                            $tmp_r= [];
                            
                        ?>
                        <?php foreach ($alternatif as $A) : ?>

                        <?php 
                            $C1    = $A->nilai_raport;
                            $MaxC1 = $g->nilai_raport;
                            $MinC1 = $h->nilai_raport;
                            $normalisasiC1 = ($MaxC1 - $C1) / ($MaxC1 - $MinC1);
                           
                            $C2    = $A->nilai_ekstrakulikuler;
                            $MaxC2 = $g->nilai_ekstrakulikuler;
                            $MinC2 = $h->nilai_ekstrakulikuler;
                            $normalisasiC2 = ($MaxC2 - $C2) / ($MaxC2 - $MinC2);
                           
                            $C3    = $A->nilai_prestasi;
                            $MaxC3 = $g->nilai_prestasi;
                            $MinC3 = $h->nilai_prestasi;
                            $normalisasiC3 = ($MaxC3 - $C3) / ($MaxC3 - $MinC3);
                            
                            $C4    = $A->nilai_sikap;
                            $MaxC4 = $g->nilai_sikap;
                            $MinC4 = $h->nilai_sikap;
                            $normalisasiC4 = ($MaxC4 - $C4) / ($MaxC4 - $MinC4);
                            
                             //nilai bobot
                            $wC1 = $c1->bobot;
                            $wC2 = $c2->bobot;
                            $wC3 = $c3->bobot;
                            $wC4 = $c4->bobot;
                            
                            $hitungSc1 = $wC1*$normalisasiC1;
                            $hitungSc2 = $wC2*$normalisasiC2;
                            $hitungSc3 = $wC3*$normalisasiC3;
                            $hitungSc4 = $wC4*$normalisasiC4;
                            
                            //Nilai S
                            $S = $hitungSc1+$hitungSc2+$hitungSc3+$hitungSc4;
                            array_push($tmp_s,$S);
                            //Nilai R
                            $R = max($hitungSc1,$hitungSc2,$hitungSc3,$hitungSc4); 
                            array_push($tmp_r,$R);
                    
                        // $Qi=($S-$MinS);
                        ?>


                        <?php endforeach; ?>
                        <?php 
                     //kondisi jika data kosong
                       if (!empty($tmp_s && $tmp_r)) {
                            $MaxS = max($tmp_s);
                            $MaxR = max($tmp_r);
                            $MinS = min($tmp_s);
                            $MinR = min($tmp_r);
                       }
                           
                        ?>

                        <?php foreach ($alternatif as $A) : ?>
                        <?php 
                            $C1    = $A->nilai_raport;
                            $MaxC1 = $g->nilai_raport;
                            $MinC1 = $h->nilai_raport;
                            $normalisasiC1 = ($MaxC1 - $C1) / ($MaxC1 - $MinC1);
                           
                            $C2    = $A->nilai_ekstrakulikuler;
                            $MaxC2 = $g->nilai_ekstrakulikuler;
                            $MinC2 = $h->nilai_ekstrakulikuler;
                            $normalisasiC2 = ($MaxC2 - $C2) / ($MaxC2 - $MinC2);
                           
                            $C3    = $A->nilai_prestasi;
                            $MaxC3 = $g->nilai_prestasi;
                            $MinC3 = $h->nilai_prestasi;
                            $normalisasiC3 = ($MaxC3 - $C3) / ($MaxC3 - $MinC3);
                            
                            $C4    = $A->nilai_sikap;
                            $MaxC4 = $g->nilai_sikap;
                            $MinC4 = $h->nilai_sikap;
                            $normalisasiC4 = ($MaxC4 - $C4) / ($MaxC4 - $MinC4);
                            
                             //nilai bobot
                            $wC1 = $c1->bobot;
                            $wC2 = $c2->bobot;
                            $wC3 = $c3->bobot;
                            $wC4 = $c4->bobot;

                            
                            $hitungSc1 = $wC1*$normalisasiC1;
                            $hitungSc2 = $wC2*$normalisasiC2;
                            $hitungSc3 = $wC3*$normalisasiC3;
                            $hitungSc4 = $wC4*$normalisasiC4;
                            
                            //Nilai S
                            $S = $hitungSc1+$hitungSc2+$hitungSc3+$hitungSc4;
                            array_push($tmp_s,$S);
                            //Nilai R
                            $R = max($hitungSc1,$hitungSc2,$hitungSc3,$hitungSc4); 
                            array_push($tmp_r,$R);
                    
                        $Qi=(($S-$MinS)/($MaxS-$MinS)*0.5)+(($R-$MinR)/($MaxR-$MinR)*0.5);
                        ?>
                        <tr>
                            <td><?= $A->kode_alternatif; ?></td>
                            <td><?= $A->nama_alternatif; ?></td>

                            <td><?= $Qi; ?></td>
                        </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>


    <div class="card my-5">
        <div class="card-header bg-primary text-white">
            <h3>Perangkingan</h3>
        </div>
        <div class="card-body">

            <div class="mt-3">

                <table id="" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Nilai Qi</th>
                            <th>Rangking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $rank=[];

                        // array_push($rank,['kode'=>1,'nama'=>2,'Qi'=>33]);
                        // array_push($rank,['kode'=>1,'nama'=>2,'Qi'=>33]);
                        // array_push($rank,['kode'=>4,'nama'=>5,'Qi'=>26]);
                        // array_push($rank,['kode'=>7,'nama'=>8,'Qi'=>19]);

                        // usort($rank, function($x, $y) {
                        //     return $x['Qi'] <=> $y['Qi'];
                        // });
                            
                        // print_r($rank);
                        
                        ?>

                        <?php foreach ($alternatif as $A) : ?>
                        <?php 
                         
                            $C1    = $A->nilai_raport;
                            $MaxC1 = $g->nilai_raport;
                            $MinC1 = $h->nilai_raport;
                            $normalisasiC1 = ($MaxC1 - $C1) / ($MaxC1 - $MinC1);
                           
                            $C2    = $A->nilai_ekstrakulikuler;
                            $MaxC2 = $g->nilai_ekstrakulikuler;
                            $MinC2 = $h->nilai_ekstrakulikuler;
                            $normalisasiC2 = ($MaxC2 - $C2) / ($MaxC2 - $MinC2);
                           
                            $C3    = $A->nilai_prestasi;
                            $MaxC3 = $g->nilai_prestasi;
                            $MinC3 = $h->nilai_prestasi;
                            $normalisasiC3 = ($MaxC3 - $C3) / ($MaxC3 - $MinC3);
                            
                            $C4    = $A->nilai_sikap;
                            $MaxC4 = $g->nilai_sikap;
                            $MinC4 = $h->nilai_sikap;
                            $normalisasiC4 = ($MaxC4 - $C4) / ($MaxC4 - $MinC4);
                            
                             //nilai bobot
                            $wC1 = $c1->bobot;
                            $wC2 = $c2->bobot;
                            $wC3 = $c3->bobot;
                            $wC4 = $c4->bobot;

                            
                            $hitungSc1 = $wC1*$normalisasiC1;
                            $hitungSc2 = $wC2*$normalisasiC2;
                            $hitungSc3 = $wC3*$normalisasiC3;
                            $hitungSc4 = $wC4*$normalisasiC4;
                            
                            //Nilai S
                            $S = $hitungSc1+$hitungSc2+$hitungSc3+$hitungSc4;
                            array_push($tmp_s,$S);
                            //Nilai R
                            $R = max($hitungSc1,$hitungSc2,$hitungSc3,$hitungSc4); 
                            array_push($tmp_r,$R);
                    
                        $Qi=(($S-$MinS)/($MaxS-$MinS)*0.5)+(($R-$MinR)/($MaxR-$MinR)*0.5);
                        
                            array_push($rank,['kode'=>$A->kode_alternatif,'nama'=>$A->nama_alternatif,'Qi'=>$Qi]);
                        ?>
                        <?php endforeach; ?>

                        <?php 
                        usort($rank, function($x, $y) {
                            // return $x['Qi'] <=> $y['Qi'];
                            return $x['Qi'] < $y['Qi']? -1: 1;
                        });
                        // print_r($rank);
                        // print ('<br>');
                        // print_r($rank);
                        // print ('<br>');
                        // print_r($rank[1]['kode']);
                        // print ('<br>');
                        // print(count($rank));
                        // print ('<br>');
                        // print(count($rank[1]));
                        // print ('<br>'); print ('<br>'); print ('<br>');

                        // foreach ($rank as $key => $row) { 
                        //     foreach ($row as $key => $col) {
                        //         print($col);
                        //     }
                        //     print('<br>');
                        // }
                        ?>

                        <?php 
                        $n=1;
                        foreach ($rank as  $row) : ?>
                        <tr>
                            <?php  foreach ($row as  $col) : ?>
                            <td><?= $col ?></td>
                            <?php endforeach; ?>
                            <td><?= $n++; ?></td>
                        </tr>
                        <tr>
                            <?php if ($n==80) {
                                break;
                            } ?>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>