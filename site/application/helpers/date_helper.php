<?php
if (!function_exists('convert_to_utc_plus_3')) {
    function convert_to_utc_plus_3($datetime_str)
    {
        $utc_offset = 3; // Değiştirilecek UTC saat farkı
        $date_time = new DateTime($datetime_str, new DateTimeZone('UTC'));
        $date_time->modify("$utc_offset hours"); // UTC saatine göre düzenleme
        return $date_time->format('d.m.Y H:i:s');
    }
}
?>