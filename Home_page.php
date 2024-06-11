<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Officer Dashboard</title>

    <style>
  body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
  }
  .container {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  h1 {
    text-align: center;
    color: #007bff;
  }
  .btn {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .btn-primary {
    background-color: #007bff;
    color: #fff;
  }
  .btn-primary:hover {
    background-color: #0056b3;
  }
  .btn-success {
    background-color: #28a745;
    color: #fff;
  }
  .btn-success:hover {
    background-color: #218838;
  }
</style>
</head>
<body>
  <!-- <form action=""> -->
<div class="content-body">
            <div class="banner">
                <div class="banner-text">
                    <h1>MINISTRY OF INVESTMENTS, TRADE & INDUSTRY</h1>
                    <h2>STATE DEPARTMENT FOR TRADE</h2>
                    <h4>STAFF ATTENDACE CHECK-IN/OUT SYSTEM </h4>
                    <h2>Welcome</h2>
                          

                    
                </div>
            </div>
        </div>

<div class="container">
  <h1 class="mt-5 mb-4">Time Reporting</h1>
  <button id="reportButton" class="btn btn-primary">Report Current Time</button>
  <button id="submitButton" class="btn btn-success">Submit Existing Time</button>
</div>
<!-- </form> -->

<script>
document.getElementById('reportButton').addEventListener('click', function() {
  var currentTime = new Date().toLocaleString();
  submitTime(currentTime);
});


document.getElementById('submitButton').addEventListener('click', function() {
  var existingTime = prompt("Please enter the existing time (YYYY-MM-DD HH:MM:SS):");
  if(existingTime !== null && existingTime !== "") {
    submitTime(existingTime);
  }

});

function submitTime(time) {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "submit_time.php", true);

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      alert(xhr.responseText);

    }

  };
  xhr.send("time=" + encodeURIComponent(time));
}
</script>

        
</body>
</html>
