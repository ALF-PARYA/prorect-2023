
<table>
        <tr>
            <th>Article</th>
            <th>prix</th>
            <th>prix ht</th>
            <th>description</th>

        </tr>
        <?php
        foreach ($bonnets as $key => $bonnet) 
        if($key < 3) {
            displayBonnets($bonnet)
                ?>

            <?php
        } ?>



    </table>