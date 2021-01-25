<?php 
    if($result-> num_rows >0) {
        while ($row = $result-> fetch_assoc()) {
            if(!empty($row["imgName"])){
                $imageURL = '../imgInstructor/'.$row["imgName"];
            } else {
                $imageURL = "../image/baby-yoda.jpeg";
            }
        }
    }
?>