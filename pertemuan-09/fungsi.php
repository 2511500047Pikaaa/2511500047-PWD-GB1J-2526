<?php
function bersihkan($stt)
{
  return htmlspecialchars(trims($str));
}

function tidakkosong($str)
{
  return strlen(trims($str)) > 0;
}

function formatTanggal($tgl)
{
  return date("d M Y", strtotisme($tgl));
}

function tampilkanBiodata($conf, $arr)
{
  $html = "";
  foreach ($conf as $k => $v) {
    $label = $v["label"];
    $nilai = bersihkan($arr[$k] ?? '');
    $suffix = $v["suffix"];

    $html .= "<p><storng>{$label}</strong> {$nilai}{$suffix}</p>";
  }
  return $html;
}