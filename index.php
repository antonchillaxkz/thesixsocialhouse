<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <style type="text/css">
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background: black;
  color: white;
}

.logo-container {
  display: flex;
  justify-content: center;
  padding: 2rem 0;
}

#logo {
  max-width: 200px;
  height: auto;
}

.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 2rem;
  padding: 2rem;
}

.restaurant {
  width: 300px;
  height: 300px;
  position: relative;
  overflow: hidden;
  border-radius: 15px;
  transition: transform 0.3s;
}

.restaurant:hover {
  transform: scale(1.05);
}

a { 
	color: white;
	font-family: 'Montserrat', sans-serif;
	text-decoration: none;
 }

.restaurant .content {
  position: absolute;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(0, 0, 0, 0.6);
}

#restaurant1 {
  background: url('./img/studiocity.jpg') no-repeat center center/cover;
}

#restaurant2 {
  background: url('./img/calabasas.png') no-repeat center center/cover;
  background-position: center;
}

#restaurant3 {
  background: url('./img/westla.jpeg') no-repeat center center/cover;
}

#restaurant4 {
  background: url('./img/ventura.jpeg') no-repeat center center/cover;
}
.logo-container {
  display: flex;
  justify-content: center;
  padding: 2rem 0;
}

#logo {
  max-width: 200px;
  height: auto;
}
@media screen and (max-width: 990px) {
   #logo {
    max-width: 40%; /* Set the logo to take up 100% of the available width */
  }

    .block {
    height: 150px; /* Adjust the increased height for mobile */
  }

  .logo-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column; /* Change to a column layout */
    padding-bottom: 8rem; /* Add some bottom padding to create space */
  }

  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center; /* Center align the blocks vertically */
    padding: 2rem;
  }

  .restaurant {
    width: 100%;
    height: 300px;
    margin-bottom: 20px; /* Adjust the margin between blocks if needed */
  }



  .restaurant .content {
    font-size: 1.5rem;
  }
}
  </style>
</head>
<body>
	 <div class="logo-container">
    <img id="logo" src="./img/logo.png" alt="Logo">
  </div>
  <div class="container">
    <div class="restaurant" id="restaurant1">
      <div class="content">
        <h2><a href="http://the6socialhouse.com/studiocity">STUDIO CITY</a></h2>
      </div>
    </div>

    <div class="restaurant" id="restaurant3">
      <div class="content">
        <a href="http://the6socialhouse.com/wla"><h2>WEST LA</h2></a>
      </div>
    </div>

  </div>
  <script src="scripts.js"></script>
</body>
</html>