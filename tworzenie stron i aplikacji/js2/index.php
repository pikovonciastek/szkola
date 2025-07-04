<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: gray;
        }
    </style>
</head>
<body>
    <div>
        <input type="number" id="pole" placeholder="wpisz liczbę" min="1">
        <button data-staszic="sprawdz">Sprawdź</button>
    </div>
    <p id="wynik"></p>
    <script type="text/javascript">
        let input=document.getElementById("pole");
        let spr=document.querySelector('[data-staszic="sprawdz"]');
        let wynik=document.getElementById('wynik');
       
        function CzyPierwsza(n){
            if(Number.isInteger(n) && n > 1){
                for (let i = 2; i <= Math.sqrt(n); i++) {
                    if(n % i === 0){
                    return false; // znaleziono
                    };
                };
                return true; // brak
            };
            return false;
        };

        spr.addEventListener('click', (e) => {
            let liczba = parseInt(input.value.trim(), 10);
            if (CzyPierwsza(liczba)){
                wynik.textContent = `Liczba ${liczba} jest liczbą pierwszą`;
                wynik.style.color = "green";
            } else {
                wynik.textContent = `Liczba ${liczba} nie jest liczbą pierwszą`;
                wynik.style.color = "red";
            }
        });
    </script>
</body>
</html>