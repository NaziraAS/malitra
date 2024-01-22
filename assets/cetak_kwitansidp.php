<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        <?php echo SITE_NAME . " : " . ucfirst($this->uri->segment(1)) . " - " . ucfirst($this->uri->segment(2)) ?>
    </title>

    <!-- Custom styles for this template -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <style>
        @page {
            margin: 1cm 1cm;
        }

        .body {
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        .nav-bar {
            /* position: fixed; */
            /* top: 0.5cm;
            left: 0.5cm;
            right: 0.5cm;
            height: 3.1cm; */
            font-family: helvetica;
            /** Extra personal styles **/
            color: black;
            text-align: center;
            font-size: 10px;
            line-height: 0.4cm;
        }

        .header {
            margin-left: 300px;
        }

        /* .blank {
            top: 5cm;
        } */

        .content {
            /* position: fixed; */
            /* top: 5.5cm;
            left: 0.5cm;
            right: 0.5cm;
            height: 3.1cm; */
            color: black;
            text-align: left;
            font-family: helvetica;
            font-size: 10px;
            line-height: 0.5cm;
            /* page-break-before: always; */
        }

        .content-jasa {
            /* position: fixed; */
            /* top: 5.5cm;
            left: 0.5cm;
            right: 0.5cm;
            height: 3.1cm; */
            color: black;
            text-align: left;
            font-family: helvetica;
            font-size: 10px;
            line-height: 0.5cm;
            /* page-break-after: always; */
        }

        .content-part {
            /* position: fixed; */
            /* top: 5.5cm;
            left: 0.5cm;
            right: 0.5cm;
            height: 3.1cm; */
            color: black;
            text-align: left;
            font-family: helvetica;
            font-size: 10px;
            line-height: 0.5cm;
            /* page-break-inside: always; */
        }

        .footer {
            /* position: fixed; */
            /* bottom: 0.5cm;
            left: 0.5cm;
            right: 0.5cm;
            height: 2cm; */

            /** Extra personal styles **/
            font-family: helvetica;
            color: black;
            text-align: center;
            line-height: 0.5cm;
        }
    </style>
</head>
<?php
function rupiah($angka)
{
    $hasil_rupiah = number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
?>

<?php
	function penyebut($nilai)
	{
		$nilai = abs($nilai);
		$huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " " . $huruf[$nilai];
		} else if ($nilai < 20) {
			$temp = penyebut($nilai - 10) . " Belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai / 10) . " Puluh" . penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " Seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai / 100) . " Ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " Seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai / 1000) . " Ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai / 1000000) . " Juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai / 1000000000) . " Milyar" . penyebut(fmod($nilai, 1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai / 1000000000000) . " Trilyun" . penyebut(fmod($nilai, 1000000000000));
		}
		return $temp;
	}

	function terbilang($nilai)
	{
		if ($nilai < 0) {
			$hasil = "Minus " . trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}
		return $hasil;
	}
?>

<body>
	<?php
		$customer = '';
		$nopol = '';
	foreach($detail as $row){
		$customer = $row->namacustomer; 
		$nopol = $row->nopolisi; 
	 } ?>


    <div class="content" style="margin-top: 14%;">
        <div>
			<?php
                $var = "";
                foreach ($kwitansidp as $cell) : ?>
				<table width="100%" style="vertical-align: top; margin-top: 10px">
					<tr>
						<td width="20%"></td>
						<td><span style="color: #000000; font-weight: normal; font-size: 20px;"><?php echo $cell->customer ?></span></td>
					</tr>
				</table>
                <?php
                    // Menghapus spasi tambahan di awal dan akhir string
                    $inputString = trim(terbilang($cell->nilaikwitansi));

                    // Memisahkan string menjadi array berdasarkan spasi
                    $wordsArray = explode(" ", $inputString);

                    // Menghitung jumlah kata dalam array
                    $wordCount = count($wordsArray);

                    if($wordCount <= 8 || $wordCount <=10){
                        $style = '<br> <span style="color: white">papa</span>';
                    }else{
                        $style = '';
                    }
                ?>
				<table width="100%" style="vertical-align: top; margin-top: 18px;">
					<tr>
						<td width="20%"></td>
						<td rowspan="2"><span style="color: #000000; font-weight: normal; font-size: 20px;"><?php echo terbilang($cell->nilaikwitansi) ?> Rupiah</span> <?=$style?></td>
					</tr>
				</table>
				<table width="100%" style="vertical-align: top; margin-top: 2px">
					<tr>
						<td width="20%"></td>
						<td style="padding-left: 15px"> <span style="color: #000000; font-weight: normal; font-size: 20px;"><?php echo rupiah($cell->nilaikwitansi) ?></span></td>
					</tr>
				</table>
				<table width="100%" style="vertical-align: top; margin-top: 10px">
					<tr>
						<td width="20%"></td>
						<td> <span style="color: #000000; font-weight: normal; font-size: 20px;"><?php echo $cell->jeniskwitansi ?></span></td>
					</tr>
				</table>
			<?php endforeach?>
        </div>
    </div>
</body>
</html>
