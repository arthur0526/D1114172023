<?php
// 檢查是否傳遞了參數
if (isset($_GET['row_num']) && isset($_GET['col_num'])) {
    $row_count = intval($_GET['row_num']);
    $col_count = intval($_GET['col_num']);

    echo '表格大小: ' . $row_count . '列, ' . $col_count . '行。';

    echo '<table border="1" style="border-collapse: collapse;">';
    for ($i = 0; $i < $row_count; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $col_count; $j++) {
            echo '<td>行 ' . ($i + 1) . ', 列 ' . ($j + 1) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '請提供 row_num 和 col_num 參數。';
}
?>