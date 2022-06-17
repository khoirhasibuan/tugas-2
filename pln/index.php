<html>
<head>
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>
</head>
<body>
<div style="border:0; padding:10px; width:760px; height:auto;">
<form action="action-input-data.php" method="POST" name="form-input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="orange" size="2">Pelanggan PLN </font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>pel_id</td>
            <td><input type="text" name="pel_id" size="35" maxlength="6" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>pel_id_gol</td>
            <td><input type="text" name="pel_id_gol" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>pel_seri</td>
            <td><select name="pel_seri">
                    <option value="-">- pel_seri -
                    <option value="prabayar">prabayar
                    <option value="pascabayar">pascabayar
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>pel_nama</td>
            <td><input type="text" name="pel_nama" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>pel_no</td>
            <td><input type="text" name="pel_no" size="20" maxlength="12" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>