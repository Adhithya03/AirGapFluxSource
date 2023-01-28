<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.78">
        <link rel="stylesheet" href="css/bootstrap-4.4.1.css">
        <link rel="stylesheet" href="css/inject.css">
        <link href="images/inject.svg" rel="icon" type="image/x-icon"/>
        <title>Add resources</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Exo+2:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:ital,wght@1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&display=swap" rel="stylesheet">
        <!--  -->
    </head>
    <body>
        <div class="container">
            <div class="col-12 text-center">
                <h1>Add Resource</h1>
            </div>
            <div class="container">
                <?php
                    if(isset($_GET['thanks'])){
                          $random_num = rand(0, 17);
                          $quotes = array(
                             "Learning is not attained by chance, it must be sought for with ardor and diligence.",
                             "The purpose of education is to replace an empty mind with an open one.",
                             "The only real limitation on your abilities is the level of your desires. If you want it badly enough, there are no limits.",
                             "The more that you learn, the more people you'll know. The more that you teach, the more lives you'll touch.",
                             "The beautiful thing about learning is that no one can take it away from you.",
                             "Learning is a treasure that will follow its owner everywhere.",
                             "Education is the key to unlocking the world, a passport to freedom.",
                             "An investment in knowledge pays the best interest.",
                             "The more that you read, the more things you will know. The more that you learn, the more places you'll go.",
                             "Education is the most powerful weapon which you can use to change the world.",
                             "The greatest reward for a person's toil is not what they get for it, but what they become by it.",
                             "The more you help others, the more you help yourself.",
                             "The best way to find yourself is to lose yourself in the service of others.",
                             "You have not lived today until you have done something for someone who can never repay you.",
                             "The most rewarding thing in life is to give a piece of yourself to someone else.",
                             "The greatest use of life is to spend it for something that will outlast it.",
                             "The most powerful weapon on earth is the human soul on fire.",
                             "The best way to help people is not to tell them what to do, but to help them discover what they already know.");
                            echo "<p class='thanks'>" . $quotes[$random_num] . "</p>";
                    }
                ?>
            </div>
            <div class="continer">
                <form action="addRes.php" method="post">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <fieldset><legend>Select Subject</legend>
                            <select class="select" name="subject" id="subject" required>
                                <option disabled selected value>$ Choose a subject $</option>
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
                        <div class="col-12 col-md-12 col-lg-6">
                            <fieldset><legend>Enter Topic name</legend>
                            <input name="topicname" type="text" id="name" class="name" placeholder="Topic name. Eg: Rotating Magnetic Field" required>
                        </fieldset>
                        </div>
                    </div>
                    
                    <div class="row">

                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="form-floating">
                                <fieldset><legend>Link</legend>
                                <textarea cols="40" rows="1" name="resources" id="link" required  placeholder="Insert only one link here."></textarea>
                                </fieldset>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-6">
                            <fieldset><legend>Notes</legend>
                            <textarea name="notes" id="notes" cols="40" placeholder="If you want to add anything extra,  Add here.    For Eg. what this video covers etc."></textarea>
                             </fieldset>
                        </div>


                        <div class="col-12 col-md-12 col-lg-6">
                            <fieldset>
                                <legend>Conceptual rating</legend>
                            <div>
                                <input type="radio" name='rating' id="ec3" value="3">
                                <label for="ec3">Explains concepts in depth</label>
                            </div>
                            <div >
                                <input type="radio" name='rating' id="ec2" value="2" checked>
                                <label for="ec2">Explains a bit</label>
                            </div>
                            <div >
                                <input type="radio" name='rating' id="ec1" value="1">
                                <label for="ec1">Barely explains</label>
                            </div>  
                            <div >
                                <input type="radio" name='rating' id="ec0" value="0">
                                <label for="ec0">Tmrw is Exam!!</label>
                            </div>
                        </div>
                        </fieldset>
                      
                        <div class="col-12 col-md-12 col-lg-6">

                                <fieldset>
                                    <legend>Type of resource</legend>
                                <div>
                                    <input type="radio" name='restype' id="em0" value="0" checked>
                                    <label for="em0">Video</label>
                                </div>
                                <div >
                                    <input type="radio" name='restype' id="em1" value="1">
                                    <label for="em1">Text</label>
                                </div>
                                <div >
                                    <input type="radio" name='restype' id="em2" value="2">
                                    <label for="em2">PDF</label>
                                </div>
                                </fieldset>
                        </div>

                            <div class="col-12 col-md-12 col-lg-6">
                            <fieldset>
                                <legend>Resource Category</legend>
                                <select name='category' id="cat" required>
                                    <option value="reso" selected>Resources</option>
                                    <option value="boks">Books</option>
                                    <option value="mukn">Must know</option>
                                    <option value="gtkn">Good to know</option>
                                    <option value="ques">Questions</option>
                                    <option value="usma">Useful materials</option>
                                    <option value="simu">Simulations</option>
                                    <option value="mics">Miscellaneous</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center m-3">
                        <button class="btn btn-primary" type="submit" name="submit">Add to Database</button>
                    </div>

                </form>
            </div>
        </div>
    </body>
</html>