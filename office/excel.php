<?php
header("Content-type:application/vnd.ms-excel");
header("Content-Disposition:filename=php100.xls");
?>
<style type="text/css">
    td, th {
        width: 120px;
        text-align: center;
        font-size: 30px;
    }
</style>

<table id="tab" cellspacing=0 cellpadding=1>
    <caption>
        <h1>table header</h1>
    </caption>
    <tr bgcolor="red">
        <th>t00</th>
        <th>t01</th>
        <th>t02</th>
    </tr>
    <tr>
        <td>t10</td>
        <td>t11</td>
        <td>t12</td>
    </tr>
    <tr>
        <td>t20</td>
        <td>t21</td>
        <td>t22</td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="3"><img src="//www.baidu.com/img/bd_logo1.png"/></td>
    </tr>
    <tr>
        <td>t10</td>
        <td>t11</td>
        <td>t12</td>
    </tr>
    <tr>
        <td>t20</td>
        <td>t21</td>
        <td>t22</td>
    </tr>
</table>
