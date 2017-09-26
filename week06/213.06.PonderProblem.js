/**
 * Created by charliebrooks on 2/7/17.
 */

// Function to validate age
// make sure the age is between 0 and 118 and is not a whitespace

function checkAge(age,errMess){
    if (age <= 118 && age >= 0 && age) {
        document.getElementById(errMess).style.visibility = 'hidden';
    }
    else {
        document.getElementById(errMess).style.visibility = 'visible';
    }
}

// Function to validate SSN using regex

function checkSSN(SSN,errMess){
        if (SSN.search(/^\d{3}\-\d{2}\-\d{4}$/) == 0){
            document.getElementById(errMess).style.visibility = 'hidden';
        }
        else{
            document.getElementById(errMess).style.visibility = 'visible';
        }
}

// Function to check that the entered credit card number
// is in the correct format.

function checkCCN(CCN,errMess) {
        if (CCN.search(/^\d{4}\ \d{4}\ \d{4} \d{4}$|^\d{16}$/) == 0) {
            document.getElementById(errMess).style.visibility = 'hidden';
        }
        else {
            document.getElementById(errMess).style.visibility = 'visible';
        }
}

// Function to validate the date entered is a valid date
//
//Month: The value must be between 1 and 12 inclusive
//Day: The value must be between 1 and 31 inclusive
//Year: The value must be between 1753 and 2100 inclusive

function checkDate(date,errMess) {

        if (date.search(
            /(^[1-9]|1[0-2])\/([1-9]|[1-2][0-9]{1}|3[0-1]{1})\/((17(5[3-9]|[6-9]\d)|1[8-9]\d\d)|20\d\d|2100)$/) == 0) {
            if(date.search(/(2|4|6|9|11)\/31\/\d*/)==0){ // Checks months with only 30 days
                document.getElementById(errMess).style.visibility = 'visible';
            }
            else if(date.search(/2\/30\/\d*/)==0){ // Check Feb has no more than 29 days
                document.getElementById(errMess).style.visibility = 'visible';
            }
            else {
                document.getElementById(errMess).style.visibility = 'hidden';
            }
        }
        else {
            document.getElementById(errMess).style.visibility = 'visible';
        }
}

// Function to check the valid 2 letter
// state designation is entered

function checkState(state,errMess) {
        if (state.search(
            /^(A[L|K|Z|R]|C[A|O|T]|DE|FL|GA|HI|I[D|L|N|A]|K[S|Y]|LA|M[E|D|A|I|N|S|O|T]|N[E|V|H|J|M|Y|C|D]|O[H|K|R]|PA|RI|S[C|D]|T[N|X]|UT|V[T|A]|W[V|A|I|Y])$/) == 0) {
            document.getElementById(errMess).style.visibility = 'hidden';
        }
        else {
            document.getElementById(errMess).style.visibility = 'visible';
        }
}

// Function to check the amount entered is a
// valid money amount

function checkAmount(amount,errMess) {
        if(amount.search(
            /\s*\$?\d{1,3}((([,]\d{3})*)(\.\d{2})?)\s*$/)==0 && amount != 0) {
            document.getElementById(errMess).style.visibility = 'hidden';
        }
        else{
            document.getElementById(errMess).style.visibility = 'visible';
        }
}