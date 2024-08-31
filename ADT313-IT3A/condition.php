<h1>Condition</h1>

<?php
    $age = 20;
    if($age >= 18) {
        echo "Legal age ";
    }elseif($age >= 0 && $age <=10) {
        echo 'something';
    }else{
        echo "Minor";
    }
    $ageLabel = ($age >= 18) ? '18+' : '17-';
    echo $ageLabel;
    
    switch($role) {
        case 'admin':
            echo 'you have full access';
            break;
        case 'student':
            echo 'you can only access ...';
            break;
        case 'instructor':
            echo 'you have limited access to ...';
            break;  
         
    }

    ?>