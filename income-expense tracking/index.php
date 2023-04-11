<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-700 flex justify-center items-center">
    
    <div class="mt-12 relative overflow-x-auto  sm:rounded-lg lg:w-2/3 xl:w-1/2 md:w-3/4  ">
    <div class="flex items-end justify-end w-full"><a href="formEkleKayit.php"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kayıt ekle</button></a></div>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-100  uppercase bg-blue-700">
                    <tr>
                        <td scope="col" class="px-6 py-3">ID</td>
                        <td scope="col" class="px-6 py-3">Miktar</td>
                        <td scope="col" class="px-6 py-3">Tarih</td>
                        <td scope="col" class="px-6 py-3">Açıklama</td>
                        <td scope="col" class="px-6 py-3">Güncelle</td>
                        <td scope="col" class="px-6 py-3">Sil</td>
                    </tr>
                </thead>
                
                <tbody class="text-gray-700 ">
                
                <?php
                    include "cekirdek.php";
                    $baglanti = baglanVeritabani();
                    $kayitlar = getirMuhasebeKayitlar();

                    foreach ($kayitlar as $kayit){
                        $bagGüncelle = "formGuncelleKayit.php?ID=".$kayit["ID"].",miktar=".$kayit["miktar"].",tarih=".$kayit["tarih"].",aciklama=".$kayit["aciklama"];
                        $bagSil = "formSilKayit.php?ID=".$kayit["ID"];
                        $satir = '';
                        $satir .= '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
                        $satir .= '<td class="px-6 py-4">'.$kayit['ID'].'</td>';            
                        $satir .= '<td class="px-6 py-4">'.$kayit['miktar'].'</td>';
                        $satir .= '<td class="px-6 py-4">'.$kayit['tarih'].'</td>';
                        $satir .= '<td class="px-6 py-4">'.$kayit['aciklama'].'</td>';
                        $satir .= '<td  class="px-6 py-4"> <a href="'.$bagGüncelle.'"><button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Güncelle</button></a>
                        </td>';
                        $satir .= '<td  class="px-6 py-4"><a href="'.$bagSil.'"><button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Sil</button></a>
                        </td>';
                        $satir .= '</tr>';
                        echo $satir;
                    }
                ?>
                </tbody>
            </table>
        </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</html>