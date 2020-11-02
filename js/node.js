// "use strict";

// text = "Hello";

// console.log(text);


// var text = "Visit Microsoft and Microsoft";
// var rep = text.replace(/microsoft/i, "Ekobits");
// console.log(rep);

// document.getElementById("hello").textContent = "Hello";


// const myFunction = (elem, make) =>{
//     const elem = 5;
//     const make = 50;
//     const result = elem + make;
//     return result;
// }

// console.log(myFunction());

// text = "Hello world Good morning";
// result = text.search(/o/i);
// console.log(result);

// text = "Hello visit ekobits academy ekobits";
// result = text.replace("ekobits", "website");
// result += text.lastIndexOf("ekobits", 28);
// console.log(result);


// validateForm = () =>{
//     var username = register.
// };


obj = {
    
    userDetails: function(){
        return this.name + " " + this.height;
    }
}

obj2 = {
    name: "Samuel Seniga",
    height: "39.5",
    complexion: "Fair"
    
}

result = obj.userDetails.call(obj2);

console.log(result);
// document.querySelector("p").innerText = obj2.userDetails();

hello = () => {
    window.open("file.html", "_blank")
    console.log("Hello World");
}

myFunction = () => {
    return this.obj.userDetails();
}

console.log(myFunction());