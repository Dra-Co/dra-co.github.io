<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STKD | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link rel="icon" href="{{ url('/img/icon.png') }}" />
</head>

<body>
    <div id="id">
        @include('layouts.navbar')
        <main style="margin-top: 56px">
            @yield('content')
        </main>
        @include('layouts.footer')
        <button class="to-top" onclick="topFunction()" title="Go to Top"><i class="bi bi-chevron-up fs-5"></i></button>
    </div>
    <script>
        AOS.init();
        const toTop = document.querySelector(".to-top")
        window.addEventListener("scroll", () => {
            if(window.pageYOffset > 100){
                toTop.classList.add("active")
            }else{
                toTop.classList.remove("active")
            }
        })
        const topFunction = () => {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
