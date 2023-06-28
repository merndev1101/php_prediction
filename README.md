# php_project
This is a php code which predicate out values from input values.
 Here's a breakdown of how run the code.

*********                                                                                  **********

This code is written in PHP and it performs a linear regression analysis on three arrays of data: $X_forecast_data_past, $Y_observed_data, and $forecasted_data.

I assumed that the $X_forecasted_data_past array  is correlated with the $Y_observed_data array.  The $forecast_data array is obtained from relationship between the $X_forecasted_data_past array  and $Y_observed_data array.

I used linearRegression().
The linearRegression() function I takes two arrays as arguments, $xValues and $yValues, and returns an array containing the slope and intercept of the linear regression line that best fits the data using. The slope and intercept are calculated using the formula for a simple linear regression model.

The foreach loop then uses the slope and intercept to predict values for each element in the $forecasted_data array, and pushes these predicted values into a new array called $predictedData.

Finally, the echo statement prints out the predicted values in the $predictedData array.


You can input $X_forecast_data_past, $Y_observed_data and  $forecasted_data.
And then code print out results.


This is results value of this code.
The value was predicted based on data that you sent.

the formula used to calculate the predicted data is:

$y_{pred} = slope * x + intercept

where slopeandintercept are the coefficients of the linear regression model, and $x is the value being predicted.

Predicted data from forecasted data: [3.8325817361894, 3.8325817361894, 3.8325817361894, 3.7304396843292, 3.7304396843292, 3.7304396843292, 3.628297632469, 3.628297632469, 3.5261555806088, 3.628297632469, 3.5261555806088, 3.4240135287486, 3.2197294250282, 3.117587373168, 3.4240135287486, 3.3218714768884, 3.4240135287486, 3.3218714768884, 3.5261555806088, 3.628297632469, 3.5261555806088, 3.4240135287486, 3.2197294250282, 3.5261555806088, 3.628297632469, 3.7304396843292, 3.7304396843292, 3.7304396843292, 3.7304396843292, 3.628297632469, 3.628297632469, 3.628297632469, 3.628297632469, 3.5261555806088, 3.5261555806088, 3.8325817361894, 3.7304396843292, 4.0368658399098, 3.8325817361894, 3.5261555806088, 4.13900789177, 4.0368658399098, 4.0368658399098, 3.7304396843292, 3.8325817361894, 3.8325817361894, 4.5475760992108, 4.5475760992108, 4.5475760992108, 4.5475760992108, 4.5475760992108, 4.5475760992108, 4.4454340473506, 4.3432919954904, 4.3432919954904, 4.2411499436302]

You can run in php.
