
<?php
$studentID = 0;
        $table = array (
            "Header" => array (
                "Student ID",
                "FirstName",
                "MiddleName",
                "LastName",
                "Section",
                "Course",
                "Yearlevel"
            ),
            "Body"=>[
                array(
                    "FirstName" => "Sebastian Sonny",
                    "MiddleName" => "Palomique",
                    "LastName" => "Porciuncula",
                    "Section" => "A",
                    "Course" => "Information Technology",
                    "Yearlevel" => "3"
                ),
                array(
                    "FirstName" => "FirstName",
                    "MiddleName" => "MiddleName",
                    "LastName" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "FirstName" => "FirstName",
                    "MiddleName" => "MiddleName",
                    "LastName" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "FirstName" => "FirstName",
                    "MiddleName" => "MiddleName",
                    "LastName" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "FirstName" => "FirstName",
                    "MiddleName" => "MiddleName",
                    "LastName" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "FirstName" => "FirstName",
                    "MiddleName" => "MiddleName",
                    "LastName" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "FirstName" => "FirstName",
                    "MiddleName" => "MiddleName",
                    "LastName" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "FirstName" => "FirstName",
                    "MiddleName" => "MiddleName",
                    "LastName" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "FirstName" => "FirstName",
                    "MiddleName" => "MiddleName",
                    "LastName" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                ),
                array(
                    "FirstName" => "FirstName",
                    "MiddleName" => "MiddleName",
                    "LastName" => "LastName",
                    "Section" => "Section",
                    "Course" => "Course",
                    "Yearlevel" => "3"
                )
            ]
        ); 
        $StudentID = 0;

        echo "<table border ='5'>";
        echo "<tr>";

        foreach ($table["Header"] as $Header){
            echo "<th>$Header</th>";
        }
        echo "</tr>";

        foreach ($table["Body"] as $row){
            echo"<tr>";
             echo"<td>".($StudentID + 1)."</td>";
                $StudentID++;
            foreach ($table["Header"] as $Header){
                if ($Header !== "Student ID"){
                    $i = str_replace(' ', '', $Header);
                    echo"<td>{$row[$i]}</td>";
                }
            }
            echo"</tr>";
        }
?>
    
