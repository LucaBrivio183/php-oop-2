<?php
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Accessory.php';

//category
$category_dog = new Category('cane', '<i class="fa-solid fa-dog"></i>');
$category_cat = new Category('gatto', '<i class="fa-solid fa-cat"></i>');
$category_fish = new Category('pesce', '<i class="fa-solid fa-fish"></i>');
$category_bird = new Category('uccello', '<i class="fa-brands fa-twitter"></i>');

//product settings
$Royal_Canin_Mini_Adult = new Food('https://shop-cdn-m.mediazs.com/bilder/royal/canin/mini/adult/crocchette/per/cani/3/800/icon_topseller_1_2022_02_24t120049_096_3.jpg', 'Royal Canin Mini Adult', 43.99, $category_dog, 545, 'prosciutto, riso');
$Almo_Nature_Holistic_Maintenance_Medium_Large_Tonno_e_Riso = new Food('https://www.bauzaar.it/media/catalog/product/t/o/tonno_e_riso_cane_1.jpg?store=default&image-type=image', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, $category_dog, 400, 'manzo, cereali');
$Almo_Nature_Cat_Daily_Lattina = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245358/almo-daily-menu-cat-400-gr-manzo.jpg?v=1768232483', 'Almo Nature Cat Daily Lattina', 34.99, $category_cat, 400, 'tonno, pollo, prosciutto');
$Mangime_per_Pesci_Guppy_in_Fiocchi = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg?v=1768176733', 'Mangime per Pesci Guppy in Fiocchi', 2.95, $category_fish, 30, 'pesci e sottoprodotti dei pesci, cereali, lieviti, alghe');
$Voliera_Wilma_in_Legno = new Accessory('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1767716421', 'Voliera Wilma in Legno', 184.99, $category_bird, 'legno', 'M: L 83 x P  67 x H 153');
$Cartucce_Filtranti_per_Filtro_EasyCrystal = new Accessory('https://arcaplanet.vtexassets.com/arquivos/ids/272744/tetra-easycrystal-filterpack-carbone-250-300.jpg?v=1768176733', 'Cartucce Filtranti per Filtro EasyCrystal', 2.29, $category_fish, 'materiale espanso', 'ND');
$Kong_Classic = new Toy('https://arcaplanet.vtexassets.com/arquivos/ids/256595/kong-classic1.jpg?v=1768176732', 'Kong Classic', 13.49, $category_dog, 'Galleggia e rimbalza', '8.5 x 10');
$Topini_di_peluche_Trixie = new Toy('https://arcaplanet.vtexassets.com/arquivos/ids/223638/camon-gatto-gioco-topino-peluche-coda-corda.jpg?v=1763987788', 'Topini di peluche Trixie', 4.99, $category_cat, 'morbido con codina in corda', '8.5 x 10');

//products array for cycle
$products = [
    $Royal_Canin_Mini_Adult,
    $Almo_Nature_Holistic_Maintenance_Medium_Large_Tonno_e_Riso,
    $Almo_Nature_Cat_Daily_Lattina,
    $Mangime_per_Pesci_Guppy_in_Fiocchi,
    $Voliera_Wilma_in_Legno,
    $Cartucce_Filtranti_per_Filtro_EasyCrystal,
    $Kong_Classic,
    $Topini_di_peluche_Trixie
];
