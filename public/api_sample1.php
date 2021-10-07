<?php
/**
 * PHPでWebAPIを呼び出す（全人物）
 *
 * @link https://www.umayadia.com/Note/Note028WebAPISample.htm
 */

// APIアクセスURL
$url = 'https://umayadia-apisample.azurewebsites.net/api/persons';

// POSTするデータを作成
$context = stream_context_create([
    'http' => [
        'method' => 'GET',
        'header'  => 'Content-Type: application/json; carset=UTF-8',
    ]
]);

$raw_data = file_get_contents($url, false,$context);

// debug
//var_dump($raw_data);

// json の内容を連想配列として $data に格納する
$data = json_decode($raw_data,true);
?>
<table>
    <tr>
        <th>name</th>
        <th>note</th>
    </tr>
    <?php foreach($data as $key => $value){ // 連想配列を取り出す ?>
        <?php if(is_array($value)){ // 値が配列のみループで回して表示 ?>
            <?php foreach($value as $column){ ?>
            <tr>
                <td><?php echo $column['name']; ?></td>
                <td><?php echo $column['note']; ?></td>
            </tr>
           <?php } ?>
        <?php } ?>
    <?php } ?>
</table>
