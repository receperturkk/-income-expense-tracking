<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-700 flex flex-col justify-center items-center p-4">
<?php
include "cekirdek.php";

$ID = $_GET["ID"];
$miktar = $_GET["miktar"];
$tarih = $_GET["tarih"];
$aciklama = $_GET["aciklama"];

baglanVeritabani();

if (guncelleMuhasebeKayit ($ID, $miktar, $tarih, $aciklama)) {
    echo '<div class="p-4 flex justify-center items-center p-4  mb-4 w-1/2 text-sm text-white rounded-lg bg-green-500 dark:bg-gray-800" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">BAŞARILI</span> Güncelleme başarılı bir şekilde gerçekleşti.
    </div>
  </div>';
}
else echo '<div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
<svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
<span class="sr-only">Info</span>
<div>
  <span class="font-medium">HATA!</span> Güncelleme yapılamadı. Lütfen tekrar deneyin.
</div>
</div>';
echo ' <div class="flex items-center justify-center w-full"><a href="index.php"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ana Sayfa</button></a></div>'
?>
</body>
</html>