<?php
    // //Check for posted data
    // if (filter_has_var(INPUT_POST, 'data')) { //INPUT POST - looking for post data
    //     echo 'Data found';
    // } else {
    //     echo 'No data';
    // }

    if (filter_has_var(INPUT_POST, 'data')) { //INPUT POST - looking for post data
        $email = $_POST['data'];

        //Remove illegal characters
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email is valid <br>";
        } else {
            echo "Email is not valid <br>";
        }
    }

    $var = 23;

    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var. ' is a number <br>';
    } else {
        echo $var. ' is not a number <br>';
    }

    $filters = ["data" => FILTER_VALIDATE_EMAIL, 
                "data2" => [
                    "filter" => FILTER_VALIDATE_INT,
                    "options" => [
                        "min_range" => 1,
                        "max_range" => 100
                                ]
                    ]
            ];
    
    print_r(filter_input_array(INPUT_POST, $filters));

    echo "<br>";

    $arr = ["name" => "Jeppe", 
            "age" => 25, 
            "email" => "jeppe@mail.com"];

    $filters = [
        "name" => [
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ], 
        "age" => [
            "filter" => FILTER_VALIDATE_INT,
            "options" => [
                "min_range" => 1,
                "max_range" => 120
            ]
        ],
        "email" => FILTER_VALIDATE_EMAIL
    ];

    print_r(filter_var_array($arr, $filters));

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>