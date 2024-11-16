<?php
session_start(); // Start the session

$message = ''; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $host = 'localhost'; // Change if your database is hosted elsewhere
    $db = 'amina'; // Your database name
    $user = 'root'; // Your database username
    $pass = ''; // Your database password

    try {
        // Create a new PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and bind
        $stmt = $pdo->prepare("INSERT INTO contacts (nom, prenom, tele, baladiya, wilaya, kamiya) VALUES (:nom, :prenom, :tele, :baladiya, :wilaya, :kamiya)");
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':prenom', $_POST['prenom']);
        $stmt->bindParam(':tele', $_POST['tele']);
        $stmt->bindParam(':baladiya', $_POST['baladiya']);
        $stmt->bindParam(':wilaya', $_POST['wilaya']);
        $stmt->bindParam(':kamiya', $_POST['kamiya']);

        // Execute the statement
        $stmt->execute();
        
        // Set success message
        $message = "لقد اضيف طلبك بنجاح";
    } catch (PDOException $e) {
        $message = "لقد حدث عطل يرجى المحاولة مجددا" . $e->getMessage();
    }

    // Close the connection
    $pdo = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATA Cosmitic </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</head>
<body>
    
    <!-- header  -->
    <header>
        <!-- menu responsive -->
        
        <div class="menu_toggle">
            <span></span>
        </div>

        <div class="logo">
            <p><span>Cosmitic</span>ATA</p>
        </div>
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="#cars">Produits</a></li>
            <li><a href="#services">Commentaire</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <button class="login_btn" ><a href="#contact">اشتري الان</a></button>
    </header>
    <!-- section Acceuil -->
     
    <section id="home">
        <div class="left">
            <h1>Buy <span>Your Car</span> Cheaper From Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit doloremque earum, totam laudantium dolor voluptatum fugiat. Odio doloribus nostrum harum corporis. Natus omnis deleniti reiciendis illum maxime necessitatibus accusantium esse.</p>
            <a href="#">4063 DA</a>
        </div>
        <div class="right">
            <img src="imagess/img.jpg">
        </div>
    </section>




    <!-- section vehicule -->

    <section id="cars">
        <h1 class="section_title">المنتجات</h1>
        <div class="images">
            <ul>
                <li class="car">
                   <div>
                       <img src="imagess/img1.jpg" alt="">
                   </div>
                   <span>LAMBORGHINI</span>
                   <span class="prix">300.000$</span>
                   <a href="#">ACHETER MAINTENANT</a>
                </li>
                <li class="car">
                    <div>
                        <img src="imagess/img2.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="imagess/img3.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <!-- <li class="car">
                    <div>
                        <img src="images/car4.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/car5.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/car6.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li> -->
            </ul>
        </div>
    </section>

    <!-- section services -->
    <section id="services">
        <h1 class="section_title">تعليقات الزبائن</h1>
        <div class="images">
            <ul>
                <li class="car">
                   <div>
                       <img src="imagess/img1.jpg" alt="">
                   </div>
                   <span>LAMBORGHINI</span>
                </li>
                <li class="car">
                    <div>
                        <img src="imagess/img2.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    
                 </li>
                 <li class="car">
                    <div>
                        <img src="imagess/img3.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    
                 </li>
                 <!-- <li class="car">
                    <div>
                        <img src="images/car4.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/car5.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li>
                 <li class="car">
                    <div>
                        <img src="images/car6.jpg" alt="">
                    </div>
                    <span>LAMBORGHINI</span>
                    <span class="prix">300.000$</span>
                    <a href="#">ACHETER MAINTENANT</a>
                 </li> -->
            </ul>
        </div>
    </section>
    

    <!-- section contact -->

    <section id="contact">
    <h1 class="section_title">لطلب المنتج </h1>
    <div class="container">
        <div class="content">
            <div class="right-side">
                <div class="topic-text">استمارة الطلب </div>
                
                <!-- Display success/error message -->
                <?php if (!empty($message)): ?>
                    <div class="alert">
                        <?php echo htmlspecialchars($message); ?>
                    </div>
                <?php endif; ?>

                <form action="index.php" method="post" dir="rtl">
                    <div class="form-group password">
                        <input type="text" name="nom" id="nom" placeholder="ادخل اسمك" required="">
                    </div>    
                    <div class="form-group fullname">
                        <input type="text" name="prenom" id="prenom" placeholder="ادخل اللقب" required="">
                    </div>
                    <div class="form-group fullname">
                        <input type="text" name="tele" id="tele" placeholder="ادخل رقم الهاتف" required="">
                    </div>
                    <div class="form-group fullname">
                        <input type="text" name="baladiya" id="baladiya" placeholder="البلدية" required="">
                    </div>
                    <div class="form-group gender">
                        <select name="wilaya" id="wilaya" required="">
                            <option value="" selected disabled>الولاية</option>
            <option value="adrar">أدرار (01)</option>
    <option value="chlef">الشلف (02)</option>
    <option value="laghouat">الأغواط (04)</option>
    <option value="oumeboughi">أم البواقي (05)</option>
    <option value="batna">باتنة (06)</option>
    <option value="bejaia">بجاية (07)</option>
    <option value="biskra">بسكرة (10)</option>
    <option value="bechar">بشار (08)</option>
    <option value="blida">البليدة (09)</option>
    <option value="bouira">البويرة (11)</option>
    <option value="tamanrasset">تمنراست (12)</option>
    <option value="tebessa">تبسة (15)</option>
    <option value="tlemcen">تلمسان (13)</option>
    <option value="tiarat">تيارت (14)</option>
    <option value="tiziouzou">تيزي وزو (16)</option>
    <option value="alger">الجزائر العاصمة (17)</option>
    <option value="jelfa">الجلفة (18)</option>
    <option value="jijel">جيجل (21)</option>
    <option value="setif">سطيف (22)</option>
    <option value="saida">سعيدة (25)</option>
    <option value="skikda">سكيكدة (23)</option>
    <option value="sidi_bel_abbes">سيدي بلعباس (24)</option>
    <option value="annaba">عنابة (26)</option>
    <option value="qalma">قالمة (27)</option>
    <option value="constantine">قسنطينة (28)</option>
    <option value="medea">المدية (29)</option>
    <option value="mustaghanem">مستغانم (30)</option>
    <option value="mila">ميلة (31)</option>
    <option value="ain_defla">عين الدفلى (32)</option>
    <option value="naama">النعامة (33)</option>
    <option value="ain_tamouchent">عين تموشنت (34)</option>
    <option value="ghardaia">غرداية (35)</option>
    <option value="ghilizan">غليزان (36)</option>
    <option value="timimoun">تيميمون (38)</option>
    <option value="bourj_bou_arreridj">برج بوعريريج (39)</option>
    <option value="boumerdes">بومرداس (40)</option>
    <option value="tissemsilt">تيسمسيلت (41)</option>
    <option value="el_oued">الوادي (42)</option>
    <option value="khenchela">خنشلة (43)</option>
    <option value="souk_ahras">سوق أهراس (44)</option>
    <option value="tipaza">تيبازة (45)</option>
    <option value="ain_ouessara">عين العفلى (46)</option>
    <option value="ain_ghazal">عين غزال (47)</option>
    <option value="bani_abbes">بني عباس (48)</option>
    <option value="ain_salah">عين صالح (49)</option>
    <option value="ain_zeh">عين زهي (50)</option>
    <option value="garet">غارات (51)</option>
    <option value="janet">جانت (52)</option>
    <option value="el_meghir">المغير (53)</option>
    <option value="el_menia">المينيا (54)</option>
                        </select>
                    </div>
                    <div class="form-group gender">
                        <select name="kamiya" id="kamiya" required="">
                            <option value="" selected disabled>الكمية</option>
            <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>

                        </select>
                    </div>
                    <div class="button">
                        <input type="submit" name="table" value="ارسال">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    <footer>
        <p>AtA Cosmitic </p>
    </footer>

    <script>
        //menu responsive code JS

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu = document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function(){
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive') ;
        }

    </script>
</body>
</html>