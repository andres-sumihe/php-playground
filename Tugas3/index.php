<?php 
    

?>
<style>
    form {width: calc(120*3px + 6*8px)}
    table, th, td {border: 1px solid; border-collapse: collapse}
    th, td {padding: 6px;}
    .row.header > th.no {width: 40px; text-align: center;}
    .row.header > th.nama {width: 120px; text-align: center;}
    .row.header > th.harga {width: 120px; text-align: center;}
    .row.header > th.input {width: 120px; text-align: center;}
    .row > .harga {width: 120px; text-align: right;}
    input.belanja {
        float: right; 
        margin-top: 20px; 
        width: 110px;
        height: 30px;
        background: none;
        border: 3px solid ;
    }
    .result {margin-top: 60px;}
</style>
<form method="POST" action="">
    <table>
        <tr class="row header">
            <th class="no">NO</th>
            <th class="nama">Nama Barang</th>
            <th class="harga">Harga</th>
            <th class="input">Beli</th>
        </tr>
        <tr class="row name">
            <td class="no">1</td>
            <td class="nama">Keyboard</td>
            <td class="harga">80.000</td>
            <td class="input">
                <input type="checkbox" name="beli[]" value="Keyboard,80000" id="">
            </td>
        </tr>
        <tr class="row name">
            <td class="no">2</td>
            <td class="name">Mouse</td>
            <td class="harga">100.000</td>
            <td class="input">
                <input type="checkbox" name="beli[]" value="Mouse,100000" id="">
            </td>
        </tr>
        <tr class="row name">
            <td class="no">3</td>
            <td class="nama">Monitor</td>
            <td class="harga">600.000</td>
            <td class="input">
                <input type="checkbox" name="beli[]" value="Monitor,600000" id="">
            </td>
        </tr>
        <tr class="row name">
            <td class="no">4</td>
            <td class="nama">Printer</td>
            <td class="harga">1.000.000</td>
            <td class="input">
                <input type="checkbox" name="beli[]" value="Printer,1000000" id="">
            </td>
        </tr>
        <tr class="row name">
            <td class="no">5</td>
            <td class="nama">Speaker</td>
            <td class="harga">300.000</td>
            <td class="input">
                <input type="checkbox" name="beli[]" value="Speaker,300000" id="">
            </td>
        </tr>

    </table>
    <input type="submit" class="belanja" name="submit" value="Belanja">
</form>


<?php 
    if(isset($_POST["beli"])){
        echo "<table class='result'>";
        $test = $_POST["beli"];
        echo "<tr><th colspan='2'>Keranjang Belanja</th></tr>";
        $total = 0;
        foreach ($test as $key => $value) {
            $data = explode(",", $value);
            $total += intval($data[1]);
            $price = number_format((intval($data[1])));
            echo "<tr><td>${data[0]}</td><td>${price}</td></tr>";
        }
        $result = number_format($total);
        echo "<tr><td><strong>Total</strong></td><td><strong>${result}</strong></td></tr>";
        echo "</table>";
    } else {null;}
?>