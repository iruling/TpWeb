const box = document.getElementById("box");

document.addEventListener("keydown", (event) => {
    switch(event.key){
        case "r":
            console.log("touche r");
            box.style.backgroundColor = "red";
            break; 
        case "o": 
            console.log("touche o");
            box.style.backgroundColor = "orange";
            break; 
        case "v": 
            console.log("touche v");
            box.style.backgroundColor = "green";
            break; 
        case "a": 
            console.log("touche a");
            box.style.backgroundColor = "blanchedalmond";
            break; 
        case "z":
            console.log("touche z");
            box.style.backgroundColor = "#3F4139";
            break; 

        default:
            break;
    }


  });