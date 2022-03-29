<!DOCTYPE html>
<html>

<head>
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body>
    <div class=container style=text-align:center>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>color</th>
            </tr>
            <?php 
    use App\Models\Tomproducts;

    foreach (Tomproducts::all() as $product): ?>

            <tr>
                <td><?php echo $product->id;?></td>
                <td> <?php echo $product->name;?></td>
                <td style="background-color:<?php echo $product->color;?>"> </td>
            </tr>

            <?php endforeach;  ?>
        </table>

    </div>