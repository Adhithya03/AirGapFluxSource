<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=0.78" />
        <title>Airgapflux Search page</title>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <link rel="stylesheet" href="css/bootstrap-4.4.1.css" />
        <link rel="stylesheet" href="css/search.css" />
        <link href="images/search.svg" rel="icon" type="image/x-icon" />
        <!-- ICONS -->
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Exo+2:wght@300&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:ital,wght@1,400&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet" />
    </head>
    <body>
        <div class="container">
            <center>
                <h1>Search Resources</h1>
            </center>
            <div class="container">
                <?php
                    $random_num = rand(0, 25);
                    $quotes = array(
                        "The most beautiful thing we can experience is the mysterious. It is the source of all true art and science.",
                        "Science is not only a discipline of reason but, also, one of romance and passion.",
                        "The greatest scientists are artists as well.",
                        "Science is the key to our future, and if you don’t believe in science, then you’re holding everybody back.",
                        "Science is a way of thinking much more than it is a body of knowledge.",
                        "Science is not about control. It is about cultivating a perpetual condition of wonder in the face of something that forever grows one step richer and subtler than our latest theory about it.",
                        "Science is the process that takes us from confusion to understanding.",
                        "Science is the engine of prosperity",
                        "Science is a wonderful thing if one does not have to earn one's living at it.",
                        "Science is a tool to think with, not a substitute for thinking.",
                        "Science is about knowing; engineering is about doing.",
                        "Science is not only compatible with spirituality; it is a profound source of spirituality.",
                        "Science is the best tool we have to understand the natural world, but it is not the only one, and it is not without its limitations.",
                        "Science is the only way to ensure the survival of humanity.",
                        "Science is not a body of knowledge, it is a method of inquiry.",
                        "Science is not a sacred cow. Science is a horse. Don't worship it. Feed it.",
                        "Science is not a collection of facts; it is a way of understanding the world.",
                        "Science is the organized skepticism in the reliability of expert opinion.",
                        "Science is a constantly expanding frontier, not a fixed set of facts.",
                        "The power of electricity is one of the greatest wonders of modern science." ,
                        "Electricity is the life blood of industry and commerce. It is the force that drives our modern world." ,
                        "Electricity is the soul of the universe." ,
                        "The principles of electricity and magnetism are so closely interwoven that it is impossible to speak of one without the other." ,
                        "The most important property of electricity is its ability to cause motion, to make things move." ,
                        "Electricity is the most mysterious, the most fabulous force in the universe.",
                        "Electricity is the invisible force that makes the world go round, and wireless technology is the key that unlocks its full potential."    
                    );
                    echo "<p class='text-center text-muted'> &ldquo;" . $quotes[$random_num] . "&rdquo;</p>"; 
                ?>
                <div class="container text-center">
                    <?php
                        
                        $pdo = new PDO('mysql:host=localhost;dbname=eeresources', 'root', '');

                        $stmt = $pdo->query('SELECT COUNT(*) FROM resourcesmaster_01'); 
                        $count = $stmt->fetchColumn(); // Display the result 
                        echo "<h4 class='text-muted'> Enhance your expertise with our   <strong> " . $count . "</strong> robust Electrical Engineering resources.</h4>"; 
                       
                        313 
                       ?>
                </div>
            
            </div>
            <div class="row">
            <div class="col-md-6 col-sm-12">
                <fieldset>
                    <div class="search">
                        <input type="text" id="search" placeholder="Type the topic name." />
                    </div>
                </fieldset>
            </div>
    <div class="col-md-6 col-sm-12">
        <fieldset>
            <select name="subject" id="subject">
                            <option selected value>Searching all Subjects</option>
                            <option value="basc">Basics of Electrical and Electronics</option>
                            <option value="bect">Basic Electric Circuit Theory </option>
                            <option value="coel">Consumer Electronics </option>
                            <option value="cosy">Control Systems </option>
                            <option value="diel">Digital Electronics </option>
                            <option value="doem">Design Of Electrical Machines </option>
                            <option value="dsip">Digital Signal Processing </option>
                            <option value="edac">Electronic Devices And Circuits </option>
                            <option value="emfi">Electromagnetic Fields </option>
                            <option value="mach">Electrical Machines </option>
                            <option value="main">Measurements </option>
                            <option value="mpmc">Microprocessors </option>
                            <option value="oali">Op Amp & Linear Ic </option>
                            <option value="plsc">Plc And Scada </option>
                            <option value="poel">Power Electronics </option>
                            <option value="posy">Power Systems </option>
                            <option value="prsw">Protection And Switch Gear </option>
                            <option value="slsd">Solid State Drives </option>
                            <option value="spem">Special Machines </option>
                            <option value="tmdt">Transmission And Distribution </option>
                        </select>
                    </fieldset>
                </div>
            </div>
            
            <div>
                <div class="custom-radio">
                    <input type="radio" name="restype" id="resDis" value checked />
                    <label for="resDis">Any</label>
                </div>
                <div class="custom-radio">
                    <input type="radio" name="restype" id="em0" value="0" />
                    <label for="em0">Video</label>
                </div>
                <div class="custom-radio">
                    <input type="radio" name="restype" id="em1" value="1" />
                    <label for="em1">Text</label>
                </div>
     
            </div>
            
                <div class="disp" id="display"></div>

            <div class="divider2"></div>
        </div>


        <footer class="footer fixed py-3 my-12">

            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="inject.php" class="nav-link px-2">Add Resources</a></li>
            </ul>
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                
                <li class="nav-item"><a href="https://forms.gle/smtHxBQJJHJPeXG89" class="nav-link px-2 text-muted"><i>Feedback | Bug Report | Request Feature</i></a></li>
                <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">About This Site</a></li>
            </ul>
            
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="https://github.com/Adhithya03/AirGapFluxSource" class="nav-link px-2 text-muted">Source Code</a></li>
                <li class="nav-item"><a href="credits.html" class="nav-link px-2 text-muted">Credits</a></li>
            </ul>
            
            <!-- <div class="container">
                <p class="aboutThisSite">
                    Hello, I am Adhithya, and I am committed to gaining an in-depth understanding of the intricacies of electrical engineering. With this goal in mind, I am proud to introduce this website
                    as a comprehensive and premier resource for those seeking to advance their knowledge in electrical engineering. Carefully curated and organized, this website offers a wealth of
                    resources to aid in fully mastering the concepts, rather than solely focusing on achieving good grades. You can contribute resources too, Just click on Add Resources button above
                </p>
            </div> -->
            <p class="copy text-center text-muted">&copy; 2023 Adhithya</p>
        </footer>
        <div class="go-to-top">
        <span class="material-symbols-outlined">arrow_upward</span>
        </div>

    </body>
</html>
