/**
 * Created by charliebrooks on 2/3/17.
 */
// 213.05.PonderProblem.js
// Assignment for week05
// Written by: Charlie Brooks
// CS 213

// Function to display Hellow World to the console

function problem1(){
    console.log("Hello World");
}


// Function to takes the user input, whch is the
// addressee of the letter, and the letter
// text as inputs and replaces RICH_GUY
// with the name name input by the user

function problem2(name2, text2){
    document.getElementById("text2").innerHTML = text2.replace(/RICH_GUY/g,name2);
}


// Function to convert Fahrenheit to Celsius
// takes the input from the user in Fahrenheit
// and displays the equivalent in Celsius to the console

function problem3(text3){
    console.log(((text3 - 32) * 5/9).toFixed(1));
}


// Function to find the cost of of postage
// based on the displayed weight table
// Takes the user input of the weight
// of the package.

function problem4(text4){
    switch(text4){
        case "1":
            console.log("$0.98");
            break;
        case "2":
            console.log("$1.19");
            break;
        case "3":
            console.log("$1.40");
            break;
        case "4":
            console.log("$1.61");
            break;
        case "5":
            console.log("$1.82");
            break;
        default:
            console.log("Invalid weight");
    }
}


// Function to take the user input
// of the apr, term in years and the amount in dollars
// and computes the compound interest.

function problem5(apr5,term5,amount5){
    for (i = 0; i < term5; i++){
        amount5 = (amount5 * (apr5 / 100)) + Number(amount5);
    }
    console.log("$" + amount5.toFixed(2));
}