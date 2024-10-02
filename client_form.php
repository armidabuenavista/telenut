<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NCS Consent Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"], input[type="date"], input[type="email"], input[type="number"], textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        input[type="checkbox"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        h3 {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<h2>NCS Consent Form</h2>
<form action="submit_ncs_consent.php" method="POST">
    <p>I voluntarily agree to avail the nutrition counseling service of the Department of Science and Technology-Food and Nutrition Research Institute (DOST-FNRI) and I have been informed that the availment of the service is voluntary and I will be asked about my name and address, contact information, and the name of the institution where I am affiliated as part of the service documentation.</p>
    
    <p>I have been informed that the NCS only covers weight management, diets at different life stages, and disease-specific, simple medical cases. For complex medical cases, initial nutrition assessment will be provided, but further consultation with other specialized medical professionals will be advised.</p>

    <p>I have been informed that I would undergo nutritional assessment. I will be asked about my anthropometric measurements, such as height and weight, and other pertinent information on my health condition, physical activity, medication, food history, biochemical record, and weight status. I understand that all personal information will be kept confidential and that no information will be divulged to reveal my identity, in compliance with the Data Privacy Act (R.A. 10173) of 2012.</p>

    <p>I have been informed that all my provided data and responses during the nutrition counseling session will be stored in a client database of the DOST-FNRI nutrition counseling and may be used in reports in aggregated format.</p>

    <p>I have been informed that during the nutrition counseling, my photos may be taken as part of the documentation process and be used in reports.</p>

    <p>This agreement is voluntary, and no force was exerted after thorough explanation of the purpose of the requirements and procedures undertaken. Furthermore, it was explained to me that there will be no monetary incentives for my voluntary participation in the counseling activity.</p>

    <p>If I have concerns regarding the service, I am free to contact Ms. RUBY D. FRANE or any designated RND of the Lifestage Nutrition Section at telephone no. 8837-8113 local 308 or at email address ncsfnri@gmail.com.</p>

    <p>I have read the foregoing information, or it has been read to me. I have had the opportunity to ask questions about it, and any questions I have been asked have been answered to my satisfaction. I consent voluntarily to avail the nutrition counseling service of DOST-FNRI.</p>

    <h3>Client Information</h3>
    <label for="client_name">Client's Full Name (Last Name, First Name, Middle Initial):</label>
    <input type="text" id="client_name" name="client_name" required>

    <label for="sex">Sex:</label>
    <label><input type="radio" name="sex" value="Male" required> Male</label>
    <label><input type="radio" name="sex" value="Female" required> Female</label>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <label for="civil_status">Civil Status:</label>
    <label><input type="radio" name="civil_status" value="Single" required> Single</label>
    <label><input type="radio" name="civil_status" value="Married" required> Married</label>
    <label><input type="radio" name="civil_status" value="Living Together" required> Living Together</label>
    <label><input type="radio" name="civil_status" value="Widowed" required> Widowed</label>
    <label><input type="radio" name="civil_status" value="Separated" required> Separated</label>

    <label for="citizenship">Citizenship:</label>
    <input type="text" id="citizenship" name="citizenship" required>

    <label for="occupation">Occupation:</label>
    <input type="text" id="occupation" name="occupation" required>

    <label for="sector">Sector:</label>
    <label><input type="radio" name="sector" value="General Public" required> General Public</label>
    <label><input type="radio" name="sector" value="Government" required> Government</label>
    <label><input type="radio" name="sector" value="Non-Government Organizations" required> Non-Government Organizations</label>
    <label><input type="radio" name="sector" value="Private Institution" required> Private Institution</label>
    <label>Other: <input type="text" name="other_sector"></label>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>

    <label for="contact_number">Contact Number:</label>
    <input type="text" id="contact_number" name="contact_number" required>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address">

    <h3>Self-Declared Information</h3>
    <label for="educational_attainment">Educational Attainment:</label>
    <label><input type="radio" name="educational_attainment" value="Elementary" required> Elementary</label>
    <label><input type="radio" name="educational_attainment" value="High School" required> High School</label>
    <label><input type="radio" name="educational_attainment" value="College" required> College</label>
    <label><input type="radio" name="educational_attainment" value="MS/PhD" required> MS/PhD</label>

    <label for="related_medical_conditions">Related Medical Conditions:</label>
    <label><input type="radio" name="related_medical_conditions" value="Endocrine" required> Endocrine (Diabetes, Thyroid Disease, Hormonal Problems)</label>
    <label><input type="radio" name="related_medical_conditions" value="Neurological" required> Neurological (Stroke, Nerve and Muscle)</label>
    <label><input type="radio" name="related_medical_conditions" value="Renal/Kidney" required> Renal/Kidney</label>
    <label><input type="radio" name="related_medical_conditions" value="Liver" required> Liver</label>
    <label><input type="radio" name="related_medical_conditions" value="Heart" required> Heart</label>
    <label>Other: <input type="text" name="other_conditions"></label>

    <label for="physical_activity_level">What is your physical activity level?</label>
    <label><input type="radio" name="physical_activity_level" value="Sedentary" required> Sedentary (Mostly resting with little or no activity)</label>
    <label><input type="radio" name="physical_activity_level" value="Light" required> Light (Minimal movement, mostly sitting/standing for long hours)</label>
    <label><input type="radio" name="physical_activity_level" value="Moderate" required> Moderate (Extended walking, lifting, or carrying)</label>
    <label><input type="radio" name="physical_activity_level" value="Very Active" required> Very Active (Extensive running, heavy lifting)</label>

    <h3>Anthropometric Data</h3>
    <label for="height">Height:</label>
    <input type="text" id="height" name="height" required placeholder="e.g., 165 cm or 5'4\"">

    <label for="weight">Weight:</label>
    <input type="text" id="weight" name="weight" required placeholder="e.g., 63 kg or 139 lbs">

    <label for="waist_circumference">Waist Circumference:</label>
    <input type="text" id="waist_circumference" name="waist_circumference" required placeholder="e.g., 80 cm or 31.5 inches">

    <label for="hip_circumference">Hip Circumference:</label>
    <input type="text" id="hip_circumference" name="hip_circumference" required placeholder="e.g., 100 cm or 39.4 inches">

    <h3>Dietary Information</h3>
    <label for="diet_history">Briefly describe your diet history (e.g., types of food you regularly consume, any diet plans you've followed):</label>
    <input type="text" id="diet_history" name="diet_history" required>

    <label for="medications">Are you currently taking any medications or supplements? If yes, please list:</label>
    <input type="text" id="medications" name="medications" required>

    <label for="nutrition_goals">What are your nutrition goals (e.g., weight loss, muscle gain, health management)?:</label>
    <input type="text" id="nutrition_goals" name="nutrition_goals" required>

    <h3>24-Hour Food Recall</h3>
    <p>Please record all food and beverage intake from the past 24 hours.</p>
    <table>
        <thead>
            <tr>
                <th>Time</th>
                <th>Type of Meal/Snack</th>
                <th>Food/Beverage Description</th>
                <th>Amount</th>
                <th>Method of Cooking (if applicable)</th>
                <th>Brand (if applicable)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="meal_time[]" required placeholder="e.g., 8:00 AM"></td>
                <td><input type="text" name="meal_type[]" required placeholder="e.g., Breakfast"></td>
                <td><input type="text" name="food_description[]" required></td>
                <td><input type="text" name="amount[]" required placeholder="e.g., 1 cup or 100 g"></td>
                <td><input type="text" name="cooking_method[]" placeholder="e.g., Boiled, Fried"></td>
                <td><input type="text" name="brand[]" placeholder="e.g., Brand Name"></td>
            </tr>
            <!-- You can add more rows as necessary -->
        </tbody>
    </table>

    <h3>Consent</h3>
    <label><input type="checkbox" name="consent" required> I hereby give my consent to the processing of my personal data as outlined in the consent agreement above.</label>

    <input type="submit" value="Submit">
</form>
</body>
</html>
