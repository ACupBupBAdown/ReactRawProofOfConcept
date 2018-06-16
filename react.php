<html>
<head>
    <title>React Hello World</title>
    <script src="https://unpkg.com/react@15/dist/react.js"></script>
    <script src="https://unpkg.com/react-dom@15/dist/react-dom.js"></script>
</head>
<body>
<div id="root">
    <div data-reactroot>
        <h1>Greetings, clive!</h1>
        <h1>Greetings, terrance!</h1>
    </div>
</div>

<script>
    window.onload = function () {

        /**
         @param {string} tagName
         @return {Element}
         */
        class AbstractReactComponent extends React.Component{

            dumbListIterate(e, props, keyy, value) {

                var elements = [];

                this.props[props].forEach(function (element) {
                    elements.push(e(element[value], { key: element[keyy] }));
                });
                return elements
            }
        }

        class Greetings extends AbstractReactComponent {
            render() {
                return div(this.dumbListIterate(h1, "list", "name", "greeting"));
            }
        }

        window.setTimeout(partA, 3000);
        function partA() {
            ReactDOM.render(
                React.createElement(Greetings, {
                    list: [new Greet("Clive"), new Greet("Dave")]
                }),
                document.getElementById('root')
            );

            window.setTimeout(partB, 3000);

        }
        function partB() {
            ReactDOM.render(
                React.createElement(Greetings, {
                    list: [new Greet("Clive"), new Greet("John")]
                }),
                document.getElementById('root')
            );
        }
    };
    function Greet(name) {
        this.name = name;
        this.greeting = "Greetings, " + this.name;
        }

    var h1 = function(string, props = null){
        return React.createElement('h1', props, string);
    }
    var div = function (string){
        return React.createElement('div', null, string);
    }

</script>
</body>
</html>