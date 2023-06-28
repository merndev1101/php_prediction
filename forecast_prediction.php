//This code is a PHP script that generates an adjusted forecast based on  input data. 
<!DOCTYPE html>
<html>
<body>

<?php
// Define arrays for your data
$Y_forecast = array(1.7, 1.7, 1.6, 1.6, 1.6, 2.0, 2.3, 1.4, 2.8, 1.3, 1.2, 3.3, 3.2, 3.2, 1.1, 1.1, 1.0, 1.0 ,1.1);
$Y_actual = array(1.5, 1.6, 1.6, 1.5, 1.4, 1.8, 2.0, 1.6, 2.3, 1.3, 1.1, 2.2, 3.1, 3.0, 1.2, 1.2, 1.1, 1.1 , 1.3);
$x_length = count($Y_actual); 
$X = range(1, $x_length); // create an time array of values from 1 to 180
$x_length = count($Y_actual); // replace this with your desired length of the output array

// Calculate the slope and intercept of the regression line
$n = count($X);
$sum_xy = 0;
$sum_x = 0;
$sum_y = 0;
$sum_x2 = 0;

for ($i = 0; $i < $n; $i++) {
    $sum_xy += $X[$i] * $Y_actual[$i];
    $sum_x += $X[$i];
    $sum_y += $Y_actual[$i];
    $sum_x2 += $X[$i] ** 2;
}

$slope = ($n * $sum_xy - $sum_x * $sum_y) / ($n * $sum_x2 - $sum_x ** 2);
$intercept = ($sum_y - $slope * $sum_x) / $n;

// Predict Y values for actual data using the regression line equation
$predicted_Y_actual = array_map(
    function ($x) use ($slope, $intercept) {
        return $slope * $x + $intercept;
    },
    $X
);

// Calculate the adjustment factor between forecast and actual
$this_callback_func = function ($predicted_val, $forecast_val) {
    return $predicted_val / $forecast_val;
};

$adjustment_factor = array_map(
    $this_callback_func,
    $predicted_Y_actual,
    $Y_forecast
);

// Generate the AI-adjusted forecast array
$this_callback_func = function ($forecast_val, $factor_val) {
    return $forecast_val * $factor_val;
};

$Y_ai_adjusted_forecast = array_map(
    $this_callback_func,
    $Y_forecast,
    $adjustment_factor
);

// Print the adjusted forecast array for testing purposes

echo implode(", ", $Y_ai_adjusted_forecast);
?>
</body>
</html>
