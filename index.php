<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Kesatu</title>   
</head>
<style>
    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid rgb(0, 0, 0);
        border-radius: 10px;
        background: rgb(255, 255, 255);
        box-sizing: border-box
    }

    input[type=submit] {
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border-top: none;
        border-left: 2px solid rgb(133, 20, 20);
        border-right: none;
        border-bottom: 5px solid rgb(133, 20, 20);
        border-radius: 10px;
        background: rgb(255, 0, 0);
        box-sizing: border-box;
        font: bolder;
    }

    div {
        padding: 100px;
    }

    .kal {
        border: 5px solid red;
        background: rgb(6, 5, 102);
        border-radius: 20px;
        padding: 25px;
        width: 26%;
        margin: 15px 15px 15px 15px;
    }

    .opt {
        border: 2px solid rgb(0, 0, 0);
        width: 180px;
        border-radius: 10px;
        margin: 8px 0;
        height: 40px;
        padding: 12px;

    }

    .hasil {
        width: 100%;
        padding: 3px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid rgb(0, 0, 0);
        border-radius: 10px;
        background-color: #3CBC8D;
        text-align: center;
        font-style: bold;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    body {
        background-color: rgb(123, 205, 243)
    }
</style>

<body>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['Operasi'];
        /*switch($operasi){
        case 'tambah' :
            $hasil = $angka1 + $angka2;
            break;
        case 'kurang' :
            $hasil= $angka1 - $angka2;
            break;
        case 'kali' :
            $hasil= $angka1 * $angka2;
            break;
        case 'bagi' :
            $hasil= $angka1 / $angka2;
            break;
        }
        */
        if ($operasi == 'tambah') {
            $hasil = $angka1 + $angka2;
        } elseif ($operasi == 'kurang') {
            $hasil = $angka1 - $angka2;
        } elseif ($operasi == 'kali') {
            $hasil = $angka1 * $angka2;
        } else {
            $hasil = $angka1 / $angka2;
        }
    }
    ?>
    <center>
        <middle>
            <div>
                <div class="kal">
                    <table>
                        <form action="#" method="post" name="kalkulator" style="border: 1px blue;">
                            <tr>
                                <th colspan="2">
                                    <font color="white">KALKULATOR ANGKA</font>
                                </th>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" name="angka1" id="Angka_Pertama"
                                        placeholder="Masukkan Bilangan Pertama"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" name="angka2" id="Angka_Kedua"
                                        placeholder="Masukkan Bilangan Kedua"></td>

                            </tr>

                            <tr>
                                <td><select class="opt" name="Operasi" placeholder="operasi">
                                        <option value="tambah">+</option>
                                        <option value="kurang">-</option>
                                        <option value="kali">x</option>
                                        <option value="bagi">/</option>
                                    </select>
                                </td>

                                </td>
                                <td><input type="submit" name="hitung" id="hitung" value="hitung"></td>
                            </tr>
                        </form>
                        <tr>
                            <td colspan="2">
                                <?php if (isset($_POST['hitung'])) { ?>
                                    <input type="text" value="<?php echo $hasil; ?>" class="hasil" readonly>
                                <?php } else { ?>
                                    <input type="text" value="error" class="hasil">
                                <?php } ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </middle>
    </center>
    </div>
</body>

</html>