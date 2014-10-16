/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function reloadCode() {
    var dom = document.getElementById("checkCodeImg");
    dom.onclick = function() {
//        dom.src = dom.title+"?str=" + Math.random();
        dom.src = dom.alt+"?str=" + Math.random();
    };
}

