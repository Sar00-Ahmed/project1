<!DOCTYPE html>
<html>
<head>
    <title>Transactions</title>
   <link rel='stylesheet' href='views/style.css'>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check</th>
                <th>Discription</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($transactions)) : ?>
            <?php foreach ($transactions as $tra) : ?>
            <tr>
                <td><?= $tra[0]?></td>
                <td><?= $tra[1] ?></td>
                <td><?= $tra[2] ?></td>
                <?php if(str_replace(['$', ','], '', $tra[3])<0) : ?>
                <td>
                    <span class="Expense">
                        <?=$tra[3] ?> </span>
                </td>
                <?php else :  ?>
                <td>
                    <span class="income">
                        <?=$tra[3] ?> </span>
                </td>
                <?php endif ?>
            </tr>
            <?php endforeach ?>
            <?php endif ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total Income:</th>
                <td class = "income">
                    <?= $total['Income'] ?>
                </td>
            </tr>
            <tr>
                <th colspan="3" >Total Expense:</th>
                <td class = "Expense">
                    <?= $total['Expense'] ?>
                </td>
            </tr>
            <tr>
                <?php if($total['Net']>0):?>
                <th colspan="3">Net Total:</th>
                <td class = "income">
                    <?= $total['Net'] ?>
                </td>
                <?php else:?>
                <th colspan="3">Net Total:</th>
                <td class = "Expense">
                    <?= $total['Net'] ?>
                </td>
                <?php endif?>
            </tr>
        </tfoot>
    </table>
</body>


</html>