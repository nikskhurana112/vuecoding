<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>



   <h1 id="heading"></h1>
   <p id="paragraph"></p>
   <div id="head">

   </div>
   <script>
      const paragraph = document.getElementById("paragraph")
      let arr = [10, 20, 33, 40, 60, 35, 7];

      let str = ''
      arr.forEach(el => {
         if (el % 2 == 0) {
            str += "<h1>" + el + "</h1>" + "<br>"
         } else {
            str += "<h1 style='color: red'><i>" + el + "</i></h1>" + "<br>"
         }
      })
      head.innerHTML = str
   </script>

</body>

</html>