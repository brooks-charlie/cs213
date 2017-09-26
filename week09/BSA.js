/**
 * Created by charliebrooks on 3/4/17.
 */
function showScout() {
    document.getElementsByClassName("scout")[0].style.visibility='visible';
       /* .style.visibility = 'visible';*/

}


function showTroop(troopid) {
    console.log("hello");
    console.log(troopid);
    document.getElementById(troopid).style.display='block';

}