<?php
require "../bootstrap.php";


//time section


  // sql to create table
  $time_sql = "CREATE TABLE IF NOT EXISTS time (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    day VARCHAR(100) NOT NULL,
    starttime VARCHAR(80) NOT NULL,
    endtime VARCHAR(80) NOT NULL,
    type VARCHAR(80) NOT NULL
  
    )";

    try{
    // use exec() because no results are returned

    $dbConnection->exec($time_sql);
    echo "Table Time created successfully";

    }
    catch(\PDOException $e){
        exit($e->getMessage());
    }




$timevalues = "INSERT INTO time 
(day, starttime, endtime, type) 
VALUES 
('monday-friday', '11:00AM', '3:00PM','lunch'),
('monday-friday', '3:00AM', '8:00PM','ala-carte'),
('saturday-sunday', '11:00AM', '3:00PM','ala-carte')
";

try{
    // use exec() because no results are returned

    $dbConnection->exec($timevalues);
    echo "\nValues Added to Time Table";

    }
    catch(\PDOException $e){
        exit($e->getMessage());
    }



//auth section

  // sql to create table
  $auth_sql = "CREATE TABLE IF NOT EXISTS auth (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL)";

    try{
    // use exec() because no results are returned
    $dbConnection->exec($auth_sql);
    echo "\nTable Auth created successfully";

    }
    catch(\PDOException $e){
        exit($e->getMessage());
    }




$authvalues = "INSERT INTO auth 
(username, password) 
VALUES 
('admin','admin')

";

try{
    // use exec() because no results are returned

    $dbConnection->exec($authvalues);
    echo "\nValues Added to Auth Table";

    }
    catch(\PDOException $e){
        exit($e->getMessage());
    }





    //menu section

     // sql to create table
  $menu_sql = "CREATE TABLE IF NOT EXISTS menu (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(255) NOT NULL,
    description_en VARCHAR(255),
    description_fi VARCHAR(255),
    type VARCHAR(255) NOT NULL,
    subtype VARCHAR(255),
    day VARCHAR(255),
    price VARCHAR(255) NOT NULL,
    pic VARCHAR(255)

  
    )";

    try{
    // use exec() because no results are returned

    $dbConnection->exec($menu_sql);
    echo "\nTable Menu created successfully";

    }
    catch(\PDOException $e){
        exit($e->getMessage());
    }

$pic = 'http://127.0.0.1:4000/uploads/1614853011089.png';


$menuvalues = "INSERT INTO menu 
(name,description_en,description_fi,type,subtype,day,price,pic)
VALUES 
('1.Tomato Soup [G,L]','Thick and creamy tomato soup.','Paksu ja kermainen tomaattikeitto.', 'soup', null,null, '5,50€', '$pic'),
('2. Hot and Sour Soup (SS) [V,G,L]','Spicy lemon flavoured soup with bamboo shoots, seasoned vegetables, and corn.','Mausteinen ja sitruunainen keitto bambuversoviipaleilla, kasviksilla ja maissilla.', 'soup', null,null, '5,90€','$pic'),
('3. Manchow Soup (SS) [V,G,L]','Spicy soup with mix vegetables in soya sauce.','Mausteinen keitto soijamarinoiduista kasviksista.', 'soup', null,null, '6,50€', '$pic'),
('4. Mushroom Soup [V,G,L]','Thick creamy mushroom soup prepared with hint of garlic, onion, pepper and coconut cream.','Paksu ja kermainen sienikeitto. Maustettu ripauksella valkosipulia, sipulia, pippuria ja kookoskermaa.', 'soup', null,null, '5,90€', '$pic'),
    
('1. Veg Pakauda [V,G,L]','onion, cauliflower and potato coated with gram flour and deep fried.','Kikhernejauhoilla paneroitua sipulia, kukkakaalia ja perunaa uppopaistettuna.', 'appetizer', null,null, '5,50€', '$pic'),
('2. Panir finger [G]','Deep-fried panir sticks coated with corn flour and breadcrumbs.','Uppopaistettua ja leivittyjä tuore juustotikkuja.', 'appetizer', null,null, '6,90€', '$pic'),
('3. Samosa [V,G,L]','Deep fried crispy pastry stuffed with vegetables. Potatoes and green peas seasoned with spices (2 pcs). Served with tomato chutney.','Uppopaistettuja, rapeita perunalla ja herneillä täytetty friteerattu kasvispasteija (2 kpl.). Tarjoillaan tomaattichutneyn kanssa.', 'appetizer', null,null, '6,90€', '$pic'),
('4. Panir chilli (S) [G]','Fried fresh cottage cheese, capsicum in spicy soy sauce, tomato ginger garlic sauce.','Uppopaistettua tuorejuustoa ja paprikaa mausteisessa soijakastike-tomaatti-inkivääri-valkosipulikastikkeessa.', 'appetizer', null,null, '6,20€', '$pic'),
('5. Chilli mushroom [V,G,L]','Fried fresh mushroom, capsicum in soy sauce, tomato- ginger- garlic sauce.','Paistettuja tuoreita sieniä ja paprikaa soijakastikke-tomaatti-inkivääri-valkosipulikastike.', 'appetizer', null,null, '6,90€', '$pic'),
('6. Tofu chilli [V,G,L]','Fried fresh tofu, capsicum in spicy soy sauce, tomato ginger garlic sauce. ','Paistettua tuoretta tofua ja paprikaa mausteisessa soijakastike-tomaatti-inkivääri-valkosipulikastike.', 'appetizer', null,null, '6,90€', '$pic'),
    
('1. Tandoori Panir [G]','Yogurt marinated, tandoori-oven grilled home-made cottage cheese with paprika, onion and tomatoes.','Jogurttimarinoitua, tandooriuunissa paistettua paneerjuustoa paprikalla, sipulilla ja tomaatilla.', 'tandooridish', null,null, '12,50€', '$pic'),
('2. Tandoori Tofu Tikki [V,G,L]','TSpices marinated , tandoori-oven grilled tofu with paprika, onion and tomatoes. ','Mausteista ja marinoitua tofua tandoori-uunissa grillattuna. Lisukkeena paprikaa, sipulia ja tomaattia.', 'tandooridish', null,null, '12,50€', '$pic'),
('3. Veg Tandoor Platter [G,L]','Yogurt marinated, tandoori-oven grilled cauliflower, home-made cottage cheese, zucchini, paprika and onion. ','Jogurttimarinoitua, tandooriuunissa grillattua kukkakaalia, paneerjuustoa, kesäkurpitsaa, paprikaa ja sipulia.', 'tandooridish', null,null, '13,50€', '$pic'),
   

('1. Matar Panir [G]','Homemade cheese and peas in onion-tomato sauce, ginger, garlic and coriander.','Paneerjuustoa ja herneitä tomaatti-sipulikastikkeessa. Inkivääriä, valkosipulia ja korianteria.', 'main', null,null, '8,90€', '$pic'),
('2. Palak Panir [G]','Fresh spinach and cottage cheese with creamy curry sauce..','Tuoretta pinaattia ja paneerjuustoa kermaisessa currykastikkeessa.', 'main', null,null, '8,90€', '$pic'),
('3. Shahi Panir [G]','Cottage cheese cooked in tomato-butter-cashew nut cream sauce.','Paneerjuustoa kermaisessa tomaatti-cashewpähkinäkastikkeessa.', 'main', null,null, '9,50€', '$pic'),
('4. Soya chunks masala [V,G,L]','Soya balls cooked in onion-tomato sauce and ground spices.','Soijapyörykät tomaatti-sipuli-masalakastikkeessa.', 'main', null,null, '8,90€', '$pic'),
('5. Kadai paneer (S) [G]','Fresh cheese capsicum and onion in spicy tomato, chilli and ginger- garlic curry cream sauce.','Paneerjuustoa, paprikaa ja sipulia mausteisessa ja kermaisessa tomaatti-chili-inkivääri-valkosipuli-currykastikkeessa.', 'main', null,null, '9,50€', '$pic'),
('6. Tofu Masala (Vegan) (S)','Fried tofu cooked with onion-tomato sauce and ginger- garlic sauce.','Friteerattua tofua tomaatti-sipulikastikkeessa. Lisukkeena inkiväärinen valkosipulikastike.', 'main', null,null, '8,90€', '$pic'),
    

('1. Stuffed Aubergine [G,L]','Eggplant stuffed with onion, potato, cheese (Tofu), ginger- garlic and spices baked in tandoori oven. (with roasted cherry tomato) served with stir fried vegetables and special dip.','Tandooriuunissa paistettua sipulilla, perunalla ja juustolla (tofu) täytettyä munakoisoa, mausteina inkivääriä ja valkosipulia. Lisukkeena paahdettuja kirsikkatomaatteja, wokattuja kasviksia ja erikoisdippi.', 'special', null,null, '14,50€', '$pic'),
('2. Stuffed paprika [V,G,L]','Mix Paprika with onion, potato, tomato, peas, ginger- garlic and spices baked in tandoori oven, served with stir fried vegetables and special dip.','Tandooriuunissa paistettuja paprikoita, sipulia, perunaa, tomaattia, herneitä, inkivääriä ja valkosipulia. Lisukkeena wokattuja kasviksia ja erikoisdippi.', 'special', null,null, '13,50€', '$pic'),
('3. Special Biryani [G,L]','Spiced basmati rice with tomato, onion, seasoned vegetables, yogurt and saffron served with raita.','Mausteista basmatiriisiä tomaatin, sipulin ja kauden kasvisten kanssa. Jogurttia ja sahramia sekä raita-kastike.', 'special', null,null, '11,50€', '$pic'),
('4. Green salad bowl [V,G,L]','Moong Sprouts, baby spinach, cherry tomato, olives, Rucola, cucumber, broccoli, avocado.','Moong Sprouts, baby spinach, cherry tomato, olives, Rucola, cucumber, broccoli, avocado.', 'special', null,null, '9,90€', '$pic'),
('5. Buddha bowl [G]','Sprouts, baby pinatti, carrot, cherry tomato, cucumber,broccoli, olives, sweet corn, cheakpeas, sesame seed, peanut, avocado, cheese cube.','Sprouts, baby pinatti, carrot, cherry tomato, cucumber,broccoli, olives, sweet corn, cheakpeas, sesame seed, peanut, avocado, cheese cube.', 'special', null,null, '10,90€', '$pic'),
('6. Special mix salad [G]','Sprouts, baby pinatti, cherry tomato, cucumber,broccoli, olives, sweet corn, cheakpeas, sesame seed, peanut, avocado, cheese cube , pineapple, cottage cheese, corn, carrot.','Sprouts, baby pinatti, cherry tomato, cucumber,broccoli, olives, sweet corn, cheakpeas, sesame seed, peanut, avocado, cheese cube , pineapple, cottage cheese, corn, carrot.', 'special', null,null, '011,90€', '$pic'),

('1. Vegetable Momo [V,L]','Wheat flour dumplings filled with finely chopped mix vegetables, onion, soya chunks, garlic, ginger, and spices and steamed to perfection. Served with specially prepared sesame & tomato dip and side salad. [Preparation takes 25 minutes].','Höyrystettyjä ja maustetettyjä vihanneksia ja tofu, sipuli, valkosipuli, inkivääriä ja soija.Tarjoillaan tomaatti-seesami-chutneyn kanssa.[valmistus kestää noin 25 minuuttia]. ', 'snacks', null,null, '12,50€', '$pic'),
('2. Jhol momo [V,L]','Vegetable momos in tomato -sesame seed- Timur, ginger and garlic sauce.', 'Vegetable momos in tomato -sesame seed- Timur, ginger and garlic sauce.', 'snacks', null,null, '12,50€', '$pic'),
('3. Chowmein (S) [V,G,L]','Noodles stir fried with seasoned mix vegetables, tomato- soy sauce. Served with special chutney.', 'Paistettua nuudelia ja vihanneksia soijakastikeessa.', 'snacks', null,null, '10,90€', '$pic'),
('4. Chole bhature [V,L]','Wheat flour deep fried bread served with cheakpeas and potato curry.', 'Vehnäjauho, paistettu leipä, kikherneiden ja perunakarryn kera.', 'snacks', null,null, '9,90€', '$pic'),

('1. Plain rice','','', 'rice', null,null, '2,50€', '$pic'),
('2. Pulao rice','','', 'rice', null,null, '2,90€', '$pic'),
('3. Jeera rice','','', 'rice', null,null, '3,50€', '$pic'),
('4. Garlic fried rice ','','', 'rice', null,null, '3,50€', '$pic'),
('5. Mushroom rice','','', 'rice', null,null, '3,90€', '$pic'),

('1. Plain naan','','', 'bread', null,null, '1,90€', '$pic'),
('2. Garlic naan','','', 'bread', null,null, '2,90€', '$pic'),
('3. Tandoor roti','','', 'bread', null,null, '1,90€', '$pic'),
('4. Alu paratha','','', 'bread', null,null, '3,90€', '$pic'),
('5. Chapati','','', 'bread', null,null, '0€', '$pic'),


('1.Mango lassi','','', 'beverage', 'cold',null, '3,90€', '$pic'),
('2. Strawberry lassi','','', 'beverage', 'cold',null, '3,90€', '$pic'),
('3. Banana lassi','','', 'beverage', 'cold',null, '3,90€', '$pic'),
('4. Salt lassi','','', 'beverage', 'cold',null, '3,50€', '$pic'),
('5. Coke, Fanta, Pepsi','','', 'beverage', 'cold',null, '2,50€', '$pic'),
('6. Salted Lime soda','','', 'beverage', 'cold',null, '2,50€', '$pic'),
('7. Sweet lime soda','','', 'beverage', 'cold',null, '2,50€', '$pic'),
('8. Juice (Appelsini, Omena, Cranberry)','','', 'beverage', 'cold',null, '3,00€', '$pic'),

('1. Coffee','','', 'beverage', 'hot',null, '2,50€', '$pic'),
('2. Tea (Black /Milk/ Green)','','', 'beverage', 'hot',null, '2,50€', '$pic'),
('3. Masala Chai Tea','','', 'beverage', 'hot',null, '3,50€', '$pic'),
('4. Milk','','', 'beverage', 'hot',null, '2,00€', '$pic'),

('1. Ice cream','(Vanilla, chocolate, moango and strawberry)','(Vanilla, chocolate, moango and strawberry)', 'dessert', null,null, '3,00€', '$pic'),
('2. Mixed Ice cream','(Mix of selected three icecreams)','(Mix of selected three icecreams)', 'dessert', null,null, '5,00€', '$pic'),
('3. Kulfi','Condensed milk-parfait containing pistachios, almonds, and cashew nuts,mildly flavoured with cardamom.','Jäädyke, jossa pistaasia, mantelia, cashew-pähkinää, kevyesti maustettu kardemummalla.', 'dessert', null,null, '4,50€', '$pic'),

('1. French Fries','','', 'kids', null,null, '5,00€', '$pic'),


('1. Alu Chana (Vegan) [G,L]','Potato and white chickpeas in onion-tomato sauce and garlic.','Perunaa ja valkokikherne sipuli-tomaatti-valkosipulikastikkeessa.', 'lunch', null,'monday', '9,95€', '$pic'),
('2. Soya-ball Masala (Vegan) [G,L]','Soya balls cooked in onion-tomato sauce and ground spices.','Maustetut soija pyörykät sipuli-tomaatti kastikkeessa.', 'lunch', null,'monday', '9,95€', '$pic'),
('3. Sag Paneer (Creamy) [G]','Fresh spinach and cottage cheese with creamy curry sauce.','Tuore pinaattia ja juustoa kermaisessa currykastikkeessa.', 'lunch', null,'monday', '9,95€', '$pic'),
('4. Vegetable Bahar (creamy) [G,L]','Mix vegetables cooked in tomato-onion and cashewnut sauce','Seka-vihanneksia tomaatti-sipuli- cashewpähkinä kastikkeessa', 'lunch', null,'monday', '9,95€', '$pic'),
('5. Chefs special Biryani [G,L]','Spiced basmati rice with tomato, onion, seasoned vegetables, yogurt, spices and saffron served with raita.','Maustettua basmatiriisiä tomaatti, sipuli, kauden vihannekset, jogurtti, sahrami sekä mausteet raitan kera.', 'lunch', null,'monday', '10,95€', '$pic'),


('1. Jeera Alu (Vegan) [G,L]','Stir fried potato with cumin seeds and spices.','Wokattua perunaa juustokuminalla sekä mausteilla.', 'lunch', null,'tuesday', '9,95€', '$pic'),
('2. Tofu masala (Vegan) [G,L]','Fried tofu cooked with onion-tomato sauce and ginger- garlic sauce.','Paistettu tofu sipuli-tomaatti ja inkivääri-valkosipulikastikkeessa.', 'lunch', null,'tuesday', '9,95€', '$pic'),
('3. Veg Korma (Creamy) [G,L]','Mix vegetables in tomato-cashew- coconut cream sauce.','Sekavihanneksia tomaatti-cashew-kookoskermakastikkeessa.', 'lunch', null,'tuesday', '9,95€', '$pic'),
('4. Paneer butter masala (Creamy) [G,L] ','Cottage cheese with onion, tomato, cashew nuts, coconut, and cream sauce.','Tuore juusto sipuli-tomaatti-cashew-kookospähkinä-kermakastikkeessa.', 'lunch', null,'tuesday', '9,95€', '$pic'),
('5. Chefs special Stuffed Paprika [G,L]','Mix Paprika stuffed with onion, potato, tomato, peas, ginger- garlic and spices baked in tandoori oven, served with stir fried vegetables and special dip.','Maustettua, tandoori-uunissa paistettua seka-paprika sipuli-peruna-tomaatti-herne-inkivääri-valkosipulitäytteellä wokattujen kasvisten sekä erikoisen dippin kera.', 'lunch', null,'tuesday', '10,95€', '$pic'),

    
('1. Alu Govi (Vegan) [G,L] ','Fried cauliflower, potato and tomato cooked in onion-tomato sauce, ginger, and garlic.','Wokattua kukkakaalia, perunaa ja tomaattia sipuli-tomaatti-inkivääri-valkosipulikastikkeessa.', 'lunch', null,'wednesday', '9,95€', '$pic'),
('2. Sag Tofu (vegan) [G,L]','Tofu and spinach in ginger, garlic, tomato- sauce.', 'Tofua ja pinaattia inkivääri-valkosipuli-tomaattikastikkeessa. ','lunch', null,'wednesday', '9,95€', '$pic'),
('3. Kadai Paneer (Creamy) [G]','Fresh cheese, capsicum and onion in spicy tomato, chilli, and ginger- garlic curry cream sauce.','Tuore juustoa, paprika ja sipulia mausteisessa tomaatti-chili-inkivääri-valkosipuli-curry-kermakastikkeessa. ', 'lunch', null,'wednesday', '9,95€', '$pic'),
('4. Matar Mushroom (cream) [G,L]','Mushroom and peas in onion- tomato creamy sauce.','Sieniä ja herneitä sipuli-tomaatti-kermakastikkeessa.', 'lunch', null,'wednesday', '9,95€', '$pic'),
('5. Chefs special Jhol Momo [L]','Wheat flour dumplings filled with finely chopped mix vegetables, onion, soya chunks, garlic, ginger, and spices and steamed to perfection, served in tomato -sesame seed- Timur, ginger and garlic sauce. ','Höyrystettyjä ja maustettua vehnä kokkareita, täytteenä seka-vihanneksia, sipuli, soijaa, valkosipuli, inkivääriä. Tarjoillaan tomaatti-seesaminseiemen-timur-inkivääri-valkosipuli kastikkeen kera.', 'lunch', null,'wednesday', '10,95€', '$pic'),


('1. Alu Matar (Vegan) [G,L]','Homemade cheese and peas in onion-tomato sauce, ginger, garlic, and coriander.','Tuorejuustoa ja herneitä sipuli-tomaatti-inkivääri-valkosipuli-korianterikastikkeessa.', 'lunch', null,'thursday', '9,95€', '$pic'),
('2. Sag Tofu (vegan) [G,L]','Fried fresh tofu, capsicum in spicy soy tomato ginger garlic sauce.','Wokattua tuore tofua, paprika mausteisessa tomaatti-inkivääri-valkosipuli-soijakastikkeessa.', 'lunch', null,'thursday', '9,95€', '$pic'),
('3. Shahi Paneer (Creamy) [G]','Cottage cheese cooked in tomato-butter-cashew cream sauce.','Tuorejuustoa tomaatti-voi-cashew-kermakastikkeessa. ', 'lunch', null,'thursday', '9,95€','$pic'),
('4. Bhindi Masala (Vegan) [G,L]','Fried okra, potatoes, with tomato, ginger & garlic masala sauce.','Paistettua okraa ja perunaa tomaatti-inkivääri-valkosipuli-masalakastikkeessa. ', 'lunch', null,'thursday', '9,95€', '$pic'),
('5. Chefs Special Dal Makhani [G,L]','Stewed whole black lentil in tomato- butter and cream sauce.','Haudutettua mustalinssia tomaatti-voi-kermakastikkeessa.', 'lunch', null,'thursday', '10,95€', '$pic'),

    
('1. Alu Paprika (Vegan) [G,L] ','Potato and paprika in onion-tomato and garlic sauce.','Perunaa ja paprika sipuli-tomaatti-valkosipulikastikkeessa.', 'lunch', null,'friday', '9,95€', '$pic'),
('2. Sag Tofu (vegan) [G,L]','Tofu and spinach in ginger, garlic, tomato- sauce.','Tofua ja pinaattia inkivääri-valkosipuli-tomaattikastikkeessa. ', 'lunch', null,'friday', '9,95€', '$pic'),
('3. Mix vegetable curry (Creamy) [G,L] ','Mix vegetables in tomato-cashew- coconut cream sauce.','Seka-vihanneksia tomaatti-cashew-kookoskermakastikkeessa', 'lunch', null,'friday', '9,95€', '$pic'),
('4. Paneer masala [G] ','Fried cottage cheese and tomato with ginger garlic and masala sauce.','Wokattua tuorejuustoa ja tomaattia inkivääri-valkosipuli-masalakastikkeessa.', 'lunch', null,'friday', '9,95€', '$pic'),
('5. Chefs Special mix vegetable tofu [G,L]','Seasonal mix vegetables with tofu cooked in special sauce.','Kauden sekavihanneksia tofun kera erityisessä kastikkeessa. ', 'lunch', null,'friday', '10,95€', '$pic')

";


try{
    // use exec() because no results are returned

    $dbConnection->exec($menuvalues);
    echo "\nValues Added to Menu Table";

    }
    catch(\PDOException $e){
        exit($e->getMessage());
    }



//offer section

  // sql to create table
  $offer_sql = "CREATE TABLE IF NOT EXISTS offer (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(255) NOT NULL,
    description_en VARCHAR(255),
    description_fi VARCHAR(255),
    status VARCHAR(20) default false
    
    )";

    try{
    // use exec() because no results are returned
    $dbConnection->exec($offer_sql);
    echo "\nTable Offer created successfully";

    }
    catch(\PDOException $e){
        exit($e->getMessage());
    }

   //juction tablefor many to many relationship between menu and offer table
   $offer_menu_sql = "CREATE TABLE IF NOT EXISTS offer_menu_junction (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    disprice VARCHAR(100) NOT NULL,
    offer_id INT(10) NOT NULL,
    menu_id INT(10) NOT NULL
    )";

    try{
    // use exec() because no results are returned
    $dbConnection->exec($offer_menu_sql);
    echo "\nTable Offer MENU JUNCTION created successfully";

    }
    catch(\PDOException $e){
        exit($e->getMessage());
    }
