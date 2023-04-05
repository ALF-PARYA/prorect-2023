
<table>
        <tr>
            <th>Article</th>
            <th>prix</th>
            <th>prix ht</th>
            <th>description</th>

        </tr>
        <?php
        foreach ($bonnets as $key => $bonnet) {
            displayBonnets($bonnet);
        } ?>



    </table>