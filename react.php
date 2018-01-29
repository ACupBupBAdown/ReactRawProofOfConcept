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
        <h1>Greetings, derrick!</h1>
    </div>
</div>

<script>
    window.onload = function () {
        class Greetings extends React.Component {
            render() {

                var elements = [];

                this.props.list.forEach(function (element) {
                    elements.push(React.createElement('h1', null, 'Greetings, ' + element.name + '!'));
                });

                return React.createElement('div', null, elements);
            }
        }

        window.setTimeout(partA, 5000);
        function partA() {
            ReactDOM.render(
                React.createElement(Greetings, {
                    list: [{name: 'clive'}, {name: 'derrick'}]
                }),
                document.getElementById('root')
            );

            window.setTimeout(partB, 5000);

        }
        function partB() {
            ReactDOM.render(
                React.createElement(Greetings, {
                    list: [{name: 'clive'}, {name: 'dave'}]
                }),
                document.getElementById('root')
            );
        }
    };
</script>
</body>
</html>