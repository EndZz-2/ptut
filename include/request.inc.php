<table>
    <tr>
        <th>Email</th>
        <th>Username</th>
        <th>Link</th>
    </tr>
    <?php
        require 'dbcon.inc.php';
        $q = $db->prepare("SELECT * FROM $table WHERE `admin`=':admin'");
        $q->execute(['admin' => 0]);
        while ($data = $q->fetch()){ 
    ?>
    <tr>
        <td><?= $data['email']?></td>
        <td><?= $data['username']?></td>
        <td class="box-copylink">
            <input class="copylink" id="copylink<?= $data['uid']?>" type="text" name="link" value="<?= $data['link']?>"
                readonly>
            <div class="tooltip">
                <button onclick="copy(<?= $data['uid']?>)" onmouseout="outFunc(<?= $data['uid']?>)">
                    <span class="tooltiptext" id="tooltip<?= $data['uid']?>">Cliquez pour copier !</span>
                    <span id="i-copy<?= $data['uid']?>" class="fas fa-copy i"></span>
                </button>
            </div>
            <div class="tooltip">
                <button onclick="del(<?= $data['uid']?>)" onmouseout="outFunc(<?= $data['uid']?>)">
                    <span class="tooltiptext" id="tooltip<?= $data['uid']?>">Cliquez pour suprimer !</span>
                    <span id="i-del<?= $data['uid']?>" class="fas fa-trash i"></span>
                </button>
            </div>
        </td>
    </tr>
    <?php
        }
    ?>
</table>