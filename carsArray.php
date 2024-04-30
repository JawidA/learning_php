<?php 
    $carsArray = [
        [
            "company_name" => "Volkswagen Group",
            "founder" => "Ferdinand Porsche",
            "founding_year" => 1937,
            "country" => "Germany",
            "overview" => "Volkswagen Group, headquartered in Wolfsburg, Germany, is one of the largest automotive manufacturers globally. Known for iconic brands like Volkswagen, Audi, Porsche, and Lamborghini, the group produces a wide range of vehicles, from compact cars to luxury sports cars."
        ],
        [
            "company_name" => "Toyota",
            "founder" => "Kiichiro Toyoda",
            "founding_year" => 1937,
            "country" => "Japan",
            "overview" => "Toyota, based in Toyota City, Japan, is renowned for its reliability and innovation. As one of the largest automakers worldwide, Toyota produces a diverse lineup of vehicles, including hybrids like the Prius, SUVs like the RAV4, and luxury models under the Lexus brand."
        ],
        [
            "company_name" => "Stellantis",
            "founder" => "Merger of Peugeot S.A. and Fiat Chrysler Automobiles N.V.",
            "founding_year" => 2021,
            "country" => "Netherlands",
            "overview" => "Stellantis is a recent merger between Peugeot S.A. and Fiat Chrysler Automobiles N.V. The company operates globally and brings together iconic brands such as Jeep, Dodge, Peugeot, and Alfa Romeo. Stellantis aims to lead in electric and connected mobility."
        ],
        [
            "company_name" => "Ford Motor Company",
            "founder" => "Henry Ford",
            "founding_year" => 1903,
            "country" => "United States",
            "overview" => "Founded by Henry Ford in Detroit, Michigan, the Ford Motor Company revolutionized mass production with the assembly line. Ford's legacy includes iconic models like the Model T and the Mustang. Today, they continue to innovate with electric vehicles and advanced safety features."
        ],
        [
            "company_name" => "Honda Motor Co., Ltd.",
            "founder" => "Soichiro Honda",
            "founding_year" => 1948,
            "country" => "Japan",
            "overview" => "Honda, headquartered in Tokyo, Japan, is known for its reliable and fuel-efficient vehicles. From the Civic to the CR-V, Honda offers a diverse range of cars, motorcycles, and power equipment. Their commitment to sustainability includes hybrid and electric models."
        ],
        [
            "company_name" => "General Motors",
            "founder" => "William C. Durant",
            "founding_year" => 1908,
            "country" => "United States",
            "overview" => "General Motors (GM), based in Detroit, Michigan, has a rich history in the automotive industry. Brands like Chevrolet, Cadillac, and GMC fall under GM's umbrella. They've played a pivotal role in shaping the industry, from the first electric car (Chevrolet Volt) to autonomous vehicle development."
        ]
    ];

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My PHP</title>
    
</head>
<body>

    <?php function arr() {
        global $carsArray; ?>

        <?php foreach($carsArray as $carCompany) {?>
            <div class="card">
                <h2> <?php echo $carCompany["company_name"] ?></h2>
                <div>
                    <h3> <?php echo $carCompany["founder"] ?></h3>
                    <p> <?php echo $carCompany["founding_year"] ?></p>
                    <p> <?php echo $carCompany["country"] ?></p>
                </div>
                <p> <?php echo $carCompany["overview"] ?></p>            
                <a class="learn_more" target="_blank" href=<?php echo "https://www.google.com/search?q=".$carCompany['company_name']?> target="_blank">learn more</a>
            </div>
        <?php }?>

    <?php }?>

    <?php arr(); ?>
        
    

</body>
</html>