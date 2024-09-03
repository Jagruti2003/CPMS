<!DOCTYPE html>
<html>
<head>
    <title>Website Feedback Form</title>
    <link rel="stylesheet" type="text/css" href="fb.css">
</head>
<body>
    <div class="form-container">
        <h1>Website Feedback Form</h1>
        <form action="/submit" method="post" class="survey-form">
        <p>
            <label for="first">Is this the first time you have visited the website?</label><br>
            <span><input type="checkbox" id="info" name="first" value="information"><label for="info">Yes</label></span>
            <span><input type="checkbox" id="product" name="first" value="product"><label for="product">No</label></span>
           
        </p>

        <p>
            <label for="primaryReason">What is the PRIMARY reason you came to the site?</label><br>
            <span><input type="checkbox" id="info" name="primaryReason" value="information"><label for="info">Current Drives</label></span>
            <span><input type="checkbox" id="product" name="primaryReason" value="product"><label for="product">Past Placements</label></span>
            <span><input type="checkbox" id="entertainment" name="primaryReason" value="entertainment"><label for="entertainment">Study Material</label></span>
            <span><input type="checkbox" id="other" name="primaryReason" value="other"><label for="other">Companies</label></span>
        </p>

        <p>
            <label for="secondaryReason">What is the Secondary reason you came to the site?</label><br>
            <span><input type="checkbox" id="promotion" name="secondaryReason" value="promotion"><label for="promotion">Internship</label></span>
            <span><input type="checkbox" id="review" name="secondaryReason" value="review"><label for="review">Training</label></span>
            <span><input type="checkbox" id="other" name="secondaryReason" value="other"><label for="other">Other</label></span>
        </p>

        <p>
            <label for="secondaryReason">Did you find what you needed?</label><br>
            <span><input type="checkbox" id="promotion" name="secondaryReason" value="promotion"><label for="promotion">Yes, all of it</label></span>
            <span><input type="checkbox" id="review" name="secondaryReason" value="review"><label for="review">Yes, some of it</label></span>
            <span><input type="checkbox" id="other" name="secondaryReason" value="other"><label for="other">No, none of it</label></span>
        </p>

        <p>
            <label for="primaryReason">Please tell us how easy it is to find information on the site.</label><br>
            <span><input type="checkbox" id="info" name="primaryReason" value="information"><label for="info">Very Easy</label></span>
            <span><input type="checkbox" id="product" name="primaryReason" value="product"><label for="product">Easy</label></span>
            <span><input type="checkbox" id="info" name="primaryReason" value="information"><label for="info">Average</label></span>
            <span><input type="checkbox" id="entertainment" name="primaryReason" value="entertainment"><label for="entertainment">Difficult</label></span>
            <span><input type="checkbox" id="other" name="primaryReason" value="other"><label for="other">Very Difficult</label></span>
        </p>


        <p>
            <label for="visitFrequency">How often do you visit the site?</label><br>
            <span><input type="checkbox" id="daily" name="visitFrequency" value="daily"><label for="daily">Daily</label></span>
            <span><input type="checkbox" id="weekly" name="visitFrequency" value="weekly"><label for="weekly">Weekly</label></span>
            <span><input type="checkbox" id="monthly" name="visitFrequency" value="monthly"><label for="monthly">Monthly</label></span>
            <span><input type="checkbox" id="lessFrequent" name="visitFrequency" value="lessFrequent"><label for="lessFrequent">Less Frequent</label></span>
        </p>

        <p>
            <label for="recommendation">What is the likelihood that you will visit the website again? </label><br>
            <span><input type="checkbox" id="likely" name="recommendation" value="likely"><label for="likely">Likely</label></span>
            <span><input type="checkbox" id="unlikely" name="recommendation" value="unlikely"><label for="unlikely">Unlikely</label></span>
        </p>

        <p>
            <label for="additionalComments">If you did not find any or all of what you needed, please tell us what information you were looking for.</label><br>
            <textarea id="additionalComments" name="additionalComments" rows="4" cols="50"></textarea>
        </p>

        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</div>
</body>
</html>