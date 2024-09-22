<?php
require 'dal_db.php';
require 'dal_load_data.php';
// load data
if($_POST["list_data"]) {
    $datatablelist = get_data("image, title, description, sprice, lprice", "tbl_cards");
    $output = "";

    if (isset($datatablelist)) {
        while ($table_data_row = mysqli_fetch_array($datatablelist)) {
            $output = $output. '
                <div class="card5">
                    <img class="image-icon" alt="" src="' . $table_data_row['image'] . '">
                    <div class="context">
                        <b class="sindhurmani-rati-manmadha-container">
                            <p class="sindhurmani-rati-manmadha">' . $table_data_row['title'] . '</p>
                            
                        </b>
                    </div>
                    <div class="b">
                        <div class="price">
                            <div class="button">
                                <b class="shop-by-department">Book Now</b>
                            </div>
                            <b class="b1">$' . $table_data_row['sprice'] . '-$' . $table_data_row['lprice'] . '</b>
                        </div>
                    </div>
                </div>
            ';
        }
    }

    echo $output;
    mysqli_close($con);
    exit();
}
?>
<!-- <p class="sindhurmani-rati-manmadha">' . $table_data_row['description'] . '</p> -->