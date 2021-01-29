<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uikit-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Парикмахер-стилист</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body>
<div id="app">
    <v-header></v-header>
    <main style="margin-top: 20px;">
        <div class="uk-container">
            <router-view></router-view>
        </div>
    </main>

</div>

<script src="{{ asset('assets/js/uikit.min.js') }}"></script>
<script src="{{ asset('assets/js/uikit-icons.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>

<script src="https://use.fontawesome.com/b91560ddce.js"></script>

<script src="./js/app.js"></script>
</body>
</html>


<script>
    import Header from "../js/components/Header";

    export default {
        components: {Header}
    }
</script>
