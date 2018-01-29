# React Raw Proof Of Concept #

This is a raw react application that stands to serve as a proof of concept. 

The php file currently serves a single file, and a single route.

After five seconds, `data-reactroot` gets emptied and repopulated by the react render of the Greetings component. 

After another five seconds, the component is rendered again, only the second elements content is changed.

Things to consider:
- Route phps 
- Service class to build particular JS resources and minify upon certain php route
- Demonstrate lack of transpiler with first load approach.
- Demonstrate react transitions to show packaging is straightforward.