<?php
/**
 * PHPでWebAPIを呼び出す（特定の人物）
 *
 * @link https://www.umayadia.com/Note/Note028WebAPISample.htm
 */

// APIログインURL
// '織田信長' → URLエンコード
$url = 'https://umayadia-apisample.azurewebsites.net/api/persons/%E7%B9%94%E7%94%B0%E4%BF%A1%E9%95%B7';

// POSTするデータを作成
$context = stream_context_create([
    'http' => [
        'method' => 'GET',
        'header'  => 'Content-Type: application/json; carset=UTF-8',
    ]
]);

$raw_data = file_get_contents($url, false,$context);

// debug
// var_dump($raw_data);

// json の内容を連想配列として $data に格納する
$data = json_decode($raw_data,true);
?>
<table>
    <tr>
        <th>name</th>
        <th>note</th>
    </tr>
    <?php foreach($data as $key => $value){ // 連想配列を取り出す ?>
        <?php if(is_array($value)){ // 値が配列のみ表示 ?>
            <tr>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['note']; ?></td>
            </tr>
        <?php } ?>
    <?php } ?>
</table>
