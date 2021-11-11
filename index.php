<?php

for ($i = 1; $i <= 200; $i++) {
    $url = "https://lordicon.com/api/library/icons?loadData=1&categoryId=" . $i;
    $content = file_get_contents($url);
    if (empty(json_decode($content, true)))
        continue;
    if(file_exists("craw/".$i . ".json"))
        continue;
    echo $i.'<br>';
    file_put_contents("craw/".$i . ".json", $content);
}

//
//$dir = scandir("craw");
//foreach ($dir as $file) {
//    if (in_array($file, array('.', '..')))
//        continue;
//    $data = file_get_contents("craw/" . $file);
//    $data = json_decode($data, true);
//    foreach ($data as $keyNew => $row) {
//
//
//        $name = !empty($row['name']) ? $row['name'] : $keyNew;
//
//
//        $file = 'json/' . strtolower($name) . '.json';
//
//        $data = !empty($row['data']) ? $row['data'] : $row;
//
//
//        foreach ($data['layers'] as $k => $layers) {
//
//            if (empty($layers['cl']))
//                continue;
//
//            unset($row['data']['layers'][$k]);
//            $data['layers'] = array_values($row['data']['layers']);
//
//        }
//        $current = json_encode($data);
//        file_put_contents($file, $current);
//
//    }
//}




