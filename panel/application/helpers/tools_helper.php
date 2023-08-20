<?php
function convertToSEO($text)
{

    $turkce = array("ç", "Ç", "ğ", "Ğ", "ü", "Ü", "ö", "Ö", "ı", "İ", "ş", "Ş", ".", ",", "!", "'", "\"", " ", "?", "*", "(", ")", "[", "]", "{", "}", "<", ">", "|", "=", "+", "&", "%", "$", "#", "@", "~", "`", "^", ":", ";", "/", "\\");
    $convert = array("c", "c", "g", "g", "u", "u", "o", "o", "i", "i", "s", "s", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");

    return str_replace($turkce, $convert, strtolower($text));
}

function get_active_user()
{
    $t = &get_instance();

    $user = $t->session->userdata("user");

    if ($user)
        return $user;
    else
        return false;
}

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