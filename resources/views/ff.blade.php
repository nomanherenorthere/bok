<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta id="cr" name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ff.css">
  <title>ff</title>
</head>
<body>
  <script>
    let ff = prompt();

    fetch(`/ff?ff=${ff}`, {
      method: 'POST',
      headers: {
          'X-CSRF-TOKEN': document.getElementById('cr').attributes.content.value,
      }
      }).then(data =>data.text())
      .then(s =>{
        window.location.replace('/'+s);
      })
      .catch(error =>{
          console.error(error);
      });
  </script>
</body>
</html>
