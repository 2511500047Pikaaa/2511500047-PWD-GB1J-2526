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

