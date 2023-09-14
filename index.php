<!DOCTYPE html>
<html lang="fr">
<head>
    
   
<meta charset="UTF-8">
    
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détermination de la Mention</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Détermination de la Mention</h1>
        
        
        
       
<?php
        // Déclaration des variables
        $moyenne = 2; // Remplacez cette valeur par la moyenne de l'élève

        // Initialisation des variables de décision et de mention
        $decision = "";
        $mention = "";

        // Détermination de la décision
        if ($moyenne >= 10) {
            $decision = "Admis";
        } else {
            $decision = "Éliminé";
        }

        // Détermination de la mention
        if ($moyenne >= 17) {
            $mention = "Excellent";
        } elseif ($moyenne >= 16) {
            $mention = "Très Bien";
        } elseif ($moyenne >= 14) {
            $mention = "Bien";
        } elseif ($moyenne >= 12) {
            $mention = "Assez Bien";
        } else {
            $mention = "Passable";
        }
        ?>

        

<p>Décision : <span class="fw-bold <?php echo ($decision == 'Admis') ? 'text-success' : 'text-danger'; ?>">
<?php echo $decision; ?></span></p>
        <p>Mention : <span class="fw-bold fs-4 <?php echo ($mention == 'Excellent') ? 'text-success' : (($mention == 'Très Bien') ? 'text-primary' : (($mention == 'Bien') ? 'text-info' : (($mention == 'Assez Bien') ? 'text-warning' : 'text-dark'))); ?>"><?php echo $mention; ?></span></p>
    </div>

    

   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>


</html>