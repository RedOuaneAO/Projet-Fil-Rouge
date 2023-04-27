<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>

    @yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    document.getElementById('inputId').addEventListener('change', function() {
        var preview = document.getElementById('preview');
        preview.innerHTML = '';
        for (var i = 0; i < this.files.length; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.createElement('img');
                img.setAttribute('src', e.target.result);
                img.setAttribute('class', 'img-thumbnail w-50');
                preview.appendChild(img);
            };
            reader.readAsDataURL(this.files[i]);
        }
    });
</script>
<script>
    const cashBtn = document.querySelector('#cashBtn');
    const creditBtn = document.querySelector('#creditBtn');
    const cashDiv = document.querySelector('#Cash');
    const creditDiv = document.querySelector('#Credit_Card');

    cashBtn.addEventListener('click', () => {
    cashDiv.classList.remove('d-none');
    creditDiv.classList.add('d-none');
    });
    creditBtn.addEventListener('click', () => {
    creditDiv.classList.remove('d-none');
    cashDiv.classList.add('d-none');
    });
</script>
<script>
    $(document).ready(function() {
      $('#search-input').on('keyup', function() {
        var value = $(this).val().toLowerCase();
        $('#cards a').filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</body>
</html>