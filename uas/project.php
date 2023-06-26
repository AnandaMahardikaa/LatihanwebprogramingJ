<!DOCTYPE html>
<html>
<head>
  <title>Konversi Suhu</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    h2 {
      text-align: center;
    }
    
    .form-group {
      margin-bottom: 15px;
    }
    
    label {
      display: block;
      margin-bottom: 5px;
    }
    
    input[type="number"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .result {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Konversi Suhu</h2>
    <div class="form-group">
      <label for="celcius">Suhu dalam Celcius</label>
      <input type="number" id="celcius" placeholder="Masukkan suhu dalam Celcius">
    </div>
    <button class="btn" onclick="konversi()">Konversi</button>
    <div class="result">
      <p id="resultText"></p>
    </div>
  </div>

  <script>
    function konversi() {
      var celciusInput = document.getElementById('celcius');
      var result = document.getElementById('resultText');

      var celcius = parseFloat(celciusInput.value);
      var fahrenheit = celcius * 9 / 5 + 32;
      var kelvin = celcius + 273.15;

      result.textContent = celcius + " derajat Celcius = " + fahrenheit + "derajat Fahrenheit dan " +
                           celcius + " derajat Celcius = " + kelvin + " Kelvin";
    }
  </script>
</body>
</html>