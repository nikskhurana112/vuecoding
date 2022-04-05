<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="app">
        <input type="text" v-model="message">
        <h1> {{ message }} </h1>
        <div v-for="x in arr">
            <h1 v-if="x % 2 == 0"> {{x}} </h1>
            <h1 :style="{'color':color}" v-else> <i>{{x}}</i> </h1>
        </div>
        <button @click="changeMessage">Change</button>
    </div>

    <!-- 14KB -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: "#app",
            data: {
                message: "",
                arr: [10, 20, 33, 40, 60, 35, 7],
                color: "red"
            },
            mounted() {
                this.message = "Hi World"
            },
            methods: {
                changeMessage() {
                    this.message = "Hello World"
                    this.color = "blue"
                }
            }
        })
    </script>
</body>

</html>