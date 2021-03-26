
$('input[type = radio][name=rate]').on('change', function () {
    switch (this.value) {
        case "1":
            document.getElementById("ressenti").innerHTML = "<h1>NUL</h1>";
            break;
        case "2":
            document.getElementById("ressenti").innerHTML = "<h1>ASSEZ BIEN</h1>";
            break;
        case "3":
            document.getElementById("ressenti").innerHTML = "<h1>BIEN</h1>";
            break;
        case "4":
            document.getElementById("ressenti").innerHTML = "<h1>EXCELLENT</h1>";
            break;
        case "5":
            document.getElementById("ressenti").innerHTML = "<h1>PARFAIT</h1>";
            break;
    }
    $('#comm').show();
});
$('#comm').hide();