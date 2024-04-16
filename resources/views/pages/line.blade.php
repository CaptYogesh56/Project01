<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wraper {
  padding: 50px;
  text-align: center;
  font-family: sans-serif;
  width: 500px;
  margin: 10px auto;
}

h1 {
  margin: 50px auto;
}

.container_line {
  border-top: 2px solid #fb6b49;
  display: flex;
  list-style: none;
  padding: 0;
  justify-content: space-between;
  align-items: stretch;
  align-content: stretch;
}

.link {
  position: relative;
  margin-top: 10px;
  width: 100%;
}

.link a {
  font-weight: bold;
  text-decoration: none;
  color: black;
  text-transform: uppercase;
  font-size: 15px;
}

.link:first-child {
  margin-left: -55px;
}

.link:last-child {
  margin-right: -55px;
}

.link::after {
  content: "";
  width: 10px;
  height: 10px;
  background: #fb6b49;
  position: absolute;
  border-radius: 10px; 
  top: -18px;
  left: 50%;
  transform: translatex(-50%);
  border: 2px solid #fb6b49;
}

/*.active::after,
.link:hover::after {
  background: black;
}*/

p.lead {
  font-weight: 600;
  margin: 50px auto;
  line-height: 1.5;
}
.dot{
    border-top: 2px solid #fb6b49;
    display: flex;
    list-style: none;
    padding: 0;
	width:70%;
	margin: auto;
}
.dot:after{
    width:15px;
 height:15px;
 border-radius:50%;
 background: #fb6b49;
}
    </style>
</head>
<body>
    
<div class="wraper">
  <h1>How We Work</h1>

  <ul class="container_line">
    <li class="link">
        <!-- <a href="">Identify</a> -->
    </li>
    <li class="link">
        <!-- <a href="">Form</a> -->
    </li>
    <!-- <li class="link active"><a href="">Develop</a></li>
    <li class="link"><a href="">Launch</a></li>
    <li class="link"><a href="">Grow</a></li> -->
  </ul>
  <div class="dot"></div>

  <p class="lead">A streamlined team of co-founders is brought together to create and lead the company, empowering a new generation of entrepreneurs.</p>
</div>

</body>
</html>