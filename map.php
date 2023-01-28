<?php

require("includes/db.php");
$parkNamesQuery = "SELECT Location FROM parks";
$parkNames = mysqli_query($connection, $parkNamesQuery);
//$park = mysqli_fetch_array($parkNames);
$parkN = [];
while ($park = mysqli_fetch_array($parkNames)) {
    array_push($parkN, $park['Location']);
}

$park2 = mysqli_fetch_array($parkNames);
//    print_r($park);
//    print_r($park2);
?>

<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<div id="map-test" class="map">
    <script>

        ymaps.ready(init);

        function init() {
            var yandexMap = new ymaps.Map('map-test', {
                center: [55.75181962041678,37.61843910179692],
                zoom: 12
            });
            var myGeocoder;
            //const parks = ["Природно-исторический парк «Измайлово»", "Ландшафтный заказник «Тропарёвский»", "Парк имени Юрия Лужкова"];
            var parks = <?= json_encode($parkN) ?>;
            parks.forEach(el => console.log(el));
            for (let i = 0; i < 150; i++) {
                myGeocoder = ymaps.geocode(parks[i]);
                myGeocoder.then(
                    function(res) {
                        yandexMap.geoObjects.add(res.geoObjects);
                        // Выведем в консоль данные, полученные в результате геокодирования объекта.
                        console.log(res.geoObjects.get(0).properties.get('metaDataProperty').getAll());
                    },
                    function(err) {
                        // Обработка ошибки.
                    }
                );
            }
        }
    </script>
</div>

<?php include "includes/footer.php"; ?>