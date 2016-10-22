<table class="picTable">
    <thead>
        <tr>
            <th>File name</th><th>Picture</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($list as $path => $item){ ?>
        <tr>
            <td><?php echo $item ?></td><td><img src="<?php echo $path ?>"></td>
        </tr>
    <?php }; ?>
    </tbody>


</table>
