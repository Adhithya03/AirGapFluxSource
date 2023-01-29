<?php
if(isset($_POST['submit'])){
    $pdo = new PDO('mysql:host=localhost;dbname=eeresources', 'root', '');
    
    $stmt = $pdo->prepare("INSERT INTO `resourcesmaster_01`(`Subject`, `Category`, `TopicName`, `Resources`, `Resource Type`, `Notes`, `ConceptualRating`) VALUES (:subject, :category, :topicname, :resources, :restype, :notes, :rating)");


    $subject    = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $category   = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_NUMBER_INT);
    $name       = filter_input(INPUT_POST, 'topicname', FILTER_SANITIZE_STRING);
    $resources  = filter_input(INPUT_POST, 'resources', FILTER_SANITIZE_URL);
    $restype    = filter_input(INPUT_POST, 'restype', FILTER_SANITIZE_NUMBER_INT);
    $notes      = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
    $rating     = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_NUMBER_INT);
    

    
    $stmt->bindParam(':subject', $subject, PDO::PARAM_STR);
    $stmt->bindParam(':category', $category, PDO::PARAM_INT);
    $stmt->bindParam(':topicname', $name, PDO::PARAM_STR);
    $stmt->bindParam(':resources', $resources, PDO::PARAM_STR);
    $stmt->bindParam(':restype', $restype, PDO::PARAM_INT);
    $stmt->bindParam(':notes', $notes, PDO::PARAM_STR);
    $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);

    $stmt->execute();
    
    header("Location: inject.php?thanks");
}
